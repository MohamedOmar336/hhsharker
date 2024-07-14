<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Models\User;
use App\Models\SmtpSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail as LaravelMail;

class MailController extends Controller
{
    public function inbox()
    {
        $mails = Mail::where('recipient_id', Auth::id())->where('label', 'inbox')->get();
        return view('admin.mails.inbox', compact('mails'));
    }

    public function starred()
    {
        $mails = Mail::where('recipient_id', Auth::id())->where('is_starred', true)->get();
        return view('mails.starred', compact('mails'));
    }

    public function important()
    {
        $mails = Mail::where('recipient_id', Auth::id())->where('label', 'important')->get();
        return view('mails.important', compact('mails'));
    }

    public function drafts()
    {
        $mails = Mail::where('sender_id', Auth::id())->where('label', 'draft')->get();
        return view('mails.drafts', compact('mails'));
    }

    public function sent()
    {
        $mails = Mail::where('sender_id', Auth::id())->where('label', 'sent')->get();
        return view('mails.sent', compact('mails'));
    }

    public function trash()
    {
        $mails = Mail::where('recipient_id', Auth::id())->where('label', 'trash')->get();
        return view('mails.trash', compact('mails'));
    }

    public function compose()
    {
        $users = User::all();
        return view('mails.compose', compact('users'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $recipient = User::findOrFail($request->recipient_id);

        // Send mail via SMTP
        $smtpSettings = SmtpSetting::first();
        config(['mail.mailers.smtp' => [
            'transport' => 'smtp',
            'host' => $smtpSettings->mail_host,
            'port' => $smtpSettings->mail_port,
            'username' => $smtpSettings->mail_username,
            'password' => $smtpSettings->mail_password,
            'encryption' => $smtpSettings->mail_encryption,
        ]]);

        $mailData = [
            'subject' => $request->subject,
            'body' => $request->body,
        ];

        LaravelMail::send([], [], function ($message) use ($mailData, $recipient) {
            $message->to($recipient->email)
                ->subject($mailData['subject'])
                ->setBody($mailData['body'], 'text/html');
        });

        // Save mail to database
        Mail::create([
            'sender_id' => Auth::id(),
            'recipient_id' => $request->recipient_id,
            'subject' => $request->subject,
            'body' => $request->body,
            'label' => 'sent',
        ]);

        return redirect()->route('mails.sent')->with('success', 'Mail sent successfully');
    }

    public function forward($id)
    {
        $mail = Mail::findOrFail($id);
        return view('mails.forward', compact('mail'));
    }

    public function reply($id)
    {
        $mail = Mail::findOrFail($id);
        return view('mails.reply', compact('mail'));
    }

    public function markStarred(Mail $mail)
    {
        if ($mail->recipient_id !== Auth::id()) {
            abort(403);
        }

        $mail->update(['is_starred' => true]);
        return back()->with('success', 'Mail marked as starred!');
    }

    public function markImportant(Mail $mail)
    {
        if ($mail->recipient_id !== Auth::id()) {
            abort(403);
        }

        $mail->update(['label' => 'important']);
        return back()->with('success', 'Mail marked as important!');
    }

    public function moveTrash(Mail $mail)
    {
        if ($mail->recipient_id !== Auth::id()) {
            abort(403);
        }

        $mail->update(['label' => 'trash']);
        return back()->with('success', 'Mail moved to trash!');
    }

    public function sendReply(Request $request, Mail $mail)
    {
        if ($mail->recipient_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'body' => 'required|string',
        ]);

        Mail::create([
            'sender_id' => Auth::id(),
            'recipient_id' => $mail->sender_id,
            'subject' => 'Re: ' . $mail->subject,
            'body' => $request->body,
            'label' => 'sent',
        ]);

        return redirect()->route('mails.inbox')->with('success', 'Reply sent successfully');
    }

    public function bulkAction(Request $request)
    {
        $validatedData = $request->validate([
            'selected_mails' => 'required|array',
            'selected_mails.*' => 'exists:mails,id',
            'action' => 'required|string|in:move_trash,mark_starred,mark_important',
        ]);

        $mailIds = $request->input('selected_mails');

        switch ($request->input('action')) {
            case 'move_trash':
                Mail::whereIn('id', $mailIds)->update(['label' => 'trash']);
                break;
            case 'mark_starred':
                Mail::whereIn('id', $mailIds)->update(['is_starred' => true]);
                break;
            case 'mark_important':
                Mail::whereIn('id', $mailIds)->update(['label' => 'important']);
                break;
        }

        return redirect()->route('mails.inbox')->with('success', 'Bulk action performed successfully!');
    }
}
