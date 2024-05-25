<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\RoomMessage;

class ChatController extends Controller
{
    public function index(User $user)
    {

        $users = User::where('active', 1)->where('id', '!=', auth()->id())->get();
        return view('admin.chat.index', compact('users'));
    }


    public function create(Request $request)
    {
        // Assuming authenticated user is initiating the chat
        $userId = auth()->id();
        $otherUserId = $request->input('other_user_id');

        // Create a new room
        $room = Room::create([
            'admin_id_one' => $userId,
            'admin_id_two' => $otherUserId,
        ]);

        // Create a new notification without specifying the id
        Notification::create([
            'type' => 'App\Notifications\NewChatMessage',
            'data' => ['message' => 'new chat has been created', 'link' => route('chat.index', ['user' => $otherUserId])],
            'notifiable_id' => $otherUserId, // Replace with the appropriate notifiable ID
            'notifiable_type' => 'App\Models\User', // Replace with the appropriate notifiable type
        ]);

        // You can return the new room ID in the response
        return response()->json(['room_id' => $room->id]);
    }


    public function checkRoom(Request $request)
    {
        $authenticatedUserId = auth()->id();
        $otherUserId = $request->input('other_user_id');

        $room = Room::where(function($query) use ($authenticatedUserId, $otherUserId) {
            $query->where('admin_id_one', $authenticatedUserId)
                  ->orWhere('admin_id_two', $authenticatedUserId);
        })->where(function($query) use ($otherUserId) {
            $query->where('admin_id_one', $otherUserId)
                  ->orWhere('admin_id_two', $otherUserId);
        })->first();

        if ($room) {
            $messages = RoomMessage::where('room_id', $room->id)->get();
            $otherUser = User::find($otherUserId);
            return response()->json([
                'room_exists' => true,
                'room_id' => $room->id,
                'messages' => $messages,
                'user' => $otherUser,
                'image' => $otherUser->image ? asset('images/' . $otherUser->image) : asset('assets-admin/images/users/user-vector.png')
            ]);
        } else {
            $otherUser = User::find($otherUserId);
            return response()->json([
                'room_exists' => false,
                'user' => $otherUser,
                'image' => $otherUser->image ? asset('images/' . $otherUser->image) : asset('assets-admin/images/users/user-vector.png')
            ]);
        }
    }


}
