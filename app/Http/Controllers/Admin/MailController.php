<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Models\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(Request $request)
    {    $query =Mail::where('recipient_id', auth()->user()->id)->orderBy('created_at', 'desc');

        if ($request->has('search')) {
            $query->where('subject', 'LIKE', "%{$request->search}%")
                ->orWhere('subject', 'LIKE', "%{$request->search}%")
                ->orWhere('body', 'LIKE', "%{$request->search}%");
        }

        $records = $query->paginate(500); 
        return view('admin.mails.index', compact('records'));
    }

    public function show(Mail $mail)
    {   $mails = Mail::where('recipient_id', auth()->user()->id);
        // Ensure the Mail belongs to the authenticated user
        if ($mail->recipient_id !== auth()->user()->id) {
            abort(403);
        }

        return view('admin.Mails.show', compact('mail','mails'));
    }

    public function compose()
    {
        $users = User::all();
        return view('admin.mails.compose', compact('users'));
    }

    public function send(Request $request)
    {  //  dd($request->all());
        $validatedData = $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
            // 'received_at' => 'required|date',
        ]);
       

        Mail::create([
            'sender_id' => auth()->user()->id,
            'recipient_id' => $request->recipient_id,
            'subject' => $request->subject,
            'body' => $request->body,
            'received_at' => now()
        ]);

        return redirect()->route('mails.index')->with('success', 'Mail sent successfully!');
    }


    public function reply($id)
    {   
        $mail = Mail::findOrFail($id);
        return view('admin.mails.reply', compact('mail'));
    }

    public function sendReply(Request $request, $id)
    {   dd($request->all());
        $mail = Mail::findOrFail($id);
        $request->validate([
            'body' => 'required|string',
        ]);



        Mail::create([
            'sender_id' => auth()->user()->id,
            'recipient_id' => $mail->sender_id,
            'subject' => $mail->subject,
            'body' => $request->body,
            'received_at' => now()
        ]);

        return redirect()->route('mails.index')->with('success', 'Reply sent successfully!');
    }

}