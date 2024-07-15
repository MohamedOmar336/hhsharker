<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Models\User;
use Illuminate\Http\Request;


class MailController extends Controller
{
    public function index(Request $request)
    {
        $query = Mail::where('recipient_id', auth()->user()->id)
        ->orWhere('sender_id', auth()->user()->id);

        // Filtering by label
        if ($request->has('label')) {
            if ($request->label === 'sent') {
                $query->where('sender_id', auth()->user()->id)
                    ->where('label', '!=', 'trash');
            } else {
                $query->where('label', $request->label);
            }
        } else {
            // Exclude trash mails by default
            $query->where('label', '!=', 'trash');
        }

        // Searching
        if ($request->has('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('subject', 'LIKE', "%{$request->search}%")
                    ->orWhere('body', 'LIKE', "%{$request->search}%");
            });
        }

        $records = $query->orderBy('created_at', 'desc')->paginate(500);
        return view('admin.mails.index', compact('records'));
    }


    public function show(Mail $mail)
    {
        // Ensure the Mail belongs to the authenticated user
        if ($mail->recipient_id !== auth()->user()->id ) {
        if ($mail->sender_id !== auth()->user()->id) {
            abort(403);
        }}

        return view('admin.mails.show', compact('mail'));
    }

    public function compose()
    {
        $users = User::all();
        return view('admin.mails.compose', compact('users'));
    }

    public function reply(Mail $mail)
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
    
        Mail::send('emails.compose', ['body' => $request->body], function ($message) use ($recipient, $request) {
            $message->to($recipient->email)
                    ->subject($request->subject);
        });
    
        Mail::create([
            'sender_id' => auth()->user()->id,
            'recipient_id' => $request->recipient_id,
            'subject' => $request->subject,
            'body' => $request->body,
            'received_at' => now(),
            'label' => 'sent', // Set label as 'sent' for outgoing mails
        ]);
    
        return redirect()->route('mails.index')->with('success', 'Mail sent successfully!');
    }
    

    public function markStarred(Mail $mail)
    {
        $mail->update(['is_starred' => true]);
        return back()->with('success', 'Mail marked as starred!');
    }

    public function markImportant(Mail $mail)
    {
        $mail->update(['label' => 'important']);
        return back()->with('success', 'Mail marked as important!');
    }

    public function markDraft(Mail $mail)
    {
        $mail->update(['label' => 'draft']);
        return back()->with('success', 'Mail marked as draft!');
    }

    public function moveTrash(Mail $mail)
    {
        $mail->update(['label' => 'trash']);
        return back()->with('success', 'Mail moved to trash!');
    }

    public function removeStarred(Mail $mail)
    {
        $mail->update(['is_starred' => false]);
        return back()->with('success', 'Star removed from mail!');
    }

    public function removeLabel(Mail $mail)
    {
        $mail->update(['label' => null]);
        return back()->with('success', 'Label removed from mail!');
    }

    public function sendReply(Request $request, Mail $mail)
    {
        $request->validate([
            'body' => 'required|string',
        ]);

        Mail::create([
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
        $validatedData = $request->validate([
            'selected_mails' => 'required|array',
            'selected_mails.*' => 'exists:mails,id',
        ]);

        $action = $request->input('action');
        $mailIds = $request->input('selected_mails');

        switch ($action) {
            case 'move_trash':
                Mail::whereIn('id', $mailIds)->update(['label' => 'trash']);
                break;
            case 'mark_starred':
                Mail::whereIn('id', $mailIds)->update(['is_starred' => true]);
                break;
            case 'mark_important':
                Mail::whereIn('id', $mailIds)->update(['label' => 'important']);
                break;
            case 'mark_draft':
                Mail::whereIn('id', $mailIds)->update(['label' => 'draft']);
                break;
            default:
                return back()->with('error', 'Invalid action!');
        }

        return redirect()->route('mails.index')->with('success', 'Bulk action performed successfully!');
    }

}