<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Mail as MailModel;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ComposeMail;

use Illuminate\Support\Facades\Auth;


class MailController extends Controller
{
    public function index(Request $request)
    {
        $label = $request->input('label', 'inbox'); // Default to 'inbox' if not specified
    
        $query = MailModel::where(function ($query) {
            $query->where('recipient_id', auth()->user()->id)
                  ->orWhere('sender_id', auth()->user()->id);
        });
    
        // Filter based on the label
        switch ($label) {
            case 'starred':
                $query->where('is_trash', false);
                $query->where('is_starred', true);
                break;
            case 'important':
                $query->where('is_trash', false);
                $query->where('is_important', true);
                break;
            case 'draft':
                $query->where('is_trash', false);
                $query->where('is_draft', true);
                break;
            case 'sent':
                $query->where('is_trash', false);
                $query->where('sender_id', Auth::id());
                break;
            case 'trash':
                $query->where('is_trash', true);
                break;
            default:
                // Inbox, default label
                $query->where('is_trash', false);
                break;
        }
    
        // Apply search if provided
        // if ($request->has('search')) {
        //     $query->where(function ($q) use ($request) {
        //         $q->where('subject', 'LIKE', "%{$request->search}%")
        //           ->orWhere('body', 'LIKE', "%{$request->search}%");
        //     });
        // }
    
        $records = $query->orderBy('created_at', 'desc')->paginate(10);
    
        return view('admin.mails.index', compact('records'));
    }
    

    public function show($id)
    {
        $mail = MailModel::findOrFail($id);
    
        // Ensure the mail belongs to the authenticated user either as a recipient or sender
        if ($mail->recipient_id !== auth()->user()->id && $mail->sender_id !== auth()->user()->id) {
            abort(403); // Forbidden
        }
    
        return view('admin.mails.show', compact('mail'));
    }
    

    public function compose()
{
    $users = User::all(); // Fetch all users
    return view('admin.mails.compose', ['users' => $users]); // Pass the users to the view
}
    public function reply(MailModel $mail)
    {
        $users = User::all();

        return view('admin.mails.reply', compact('mail','users'));
    }
    

    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
    
        $recipient = User::findOrFail($request->recipient_id);
        Mail::to($recipient->email)->send(new ComposeMail($request->subject, $request->body));

        // Mail::send('admin.mails.compose', [
        //     'body' => $request->body,
        //     'subject' => $request->subject
        // ], function ($message) use ($recipient, $request) {
        //     $message->to($recipient->email)
        //             ->subject($request->subject);
        // });
    
        MailModel::create([
            'sender_id' => auth()->user()->id,
            'recipient_id' => $request->recipient_id,
            'subject' => $request->subject,
            'body' => $request->body,
            'received_at' => now(),
            'label' => 'sent', // Set label as 'sent' for outgoing mails
        ]);
    
        return redirect()->route('mails.index')->with('success', 'Mail sent successfully!');
    }
    

    public function markStarred(MailModel $mail)
    {
        $mail->update(['is_starred' => true]);
        return back()->with('success', 'Mail marked as starred!');
    }

    public function markImportant(MailModel $mail)
    {
        $mail->update(['label' => 'important']);
        return back()->with('success', 'Mail marked as important!');
    }

    public function markDraft(MailModel $mail)
    {
        $mail->update(['label' => 'draft']);
        return back()->with('success', 'Mail marked as draft!');
    }

    public function moveTrash(MailModel $mail)
    {
        $mail->update(['label' => 'trash']);
        return back()->with('success', 'Mail moved to trash!');
    }

    public function removeStarred(MailModel $mail)
    {
        $mail->update(['is_starred' => false]);
        return back()->with('success', 'Star removed from mail!');
    }

    public function removeLabel(MailModel $mail)
    {
        $mail->update(['label' => null]);
        return back()->with('success', 'Label removed from mail!');
    }

    public function sendReply(Request $request, $id)
    {
        $mail = MailModel::findOrFail($id);
        $request->validate([
            'body' => 'required|string',
        ]);
        $recipient = User::findOrFail($mail->sender_id);
        Mail::to($recipient->email)->send(new ComposeMail($request->subject, $request->body));

        MailModel::create([
            'sender_id' => auth()->user()->id,
            'recipient_id' => $mail->sender_id,
            'subject' => $mail->subject,
            'body' => $request->body,
            'received_at' => now(),
            'label' => 'sent', // Set label as 'sent' for outgoing replies
        ]);

        return redirect()->route('mails.index')->with('success', 'Reply sent successfully!');
    }

    public function bulkAction(Request $request)
    {
        $action = $request->input('action');
        $selectedMails = $request->input('selected_mails', []);

        if (empty($selectedMails)) {
            return redirect()->back()->with('error', 'No mails selected.');
        }

        foreach ($selectedMails as $mailId) {
            $mail = MailModel::find($mailId);

            if (!$mail) {
                continue;
            }

            switch ($action) {
                case 'delete':
                    $mail->delete();
                    break;
                case 'move_trash':
                    $mail->update(['is_trash' => true]);
                    break;
                case 'mark_starred':
                    $mail->update(['is_starred' => true]);
                    break;
                case 'mark_important':
                    $mail->update(['is_important' => true]);
                    break;
                case 'mark_draft':
                    $mail->update(['is_draft' => true]);
                    break;
                default:
                    break;
            }
        }

        return redirect()->route('mails.index')->with('success', 'Bulk action completed successfully.');
    }


    public function toggleState(Request $request, $emailId, $type)
{
    $email = MailModel::findOrFail($emailId);

    switch ($type) {
        case 'starred':
            $email->is_starred = !$email->is_starred;
            break;
        case 'important':
            $email->is_important = !$email->is_important;
            break;
        case 'draft':
            $email->is_draft = !$email->is_draft;
            break;
    }

    $email->save();

    return redirect()->back()->with('success', __('general.messages.updated_successfully'));
}


}