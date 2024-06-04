<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'sender_id' => 'required|exists:users,id',
            'message' => 'required',
            'parent_id' => 'nullable|exists:messages,id',
        ]);

        Message::create($request->all());

        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }
}
