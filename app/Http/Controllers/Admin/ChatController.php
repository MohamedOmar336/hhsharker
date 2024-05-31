<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\RoomMessage;

class ChatController extends Controller
{
    /**
     * Display the chat index page.
     *
     * @param  User  $user
     * @return \Illuminate\View\View
     */
    public function index(User $user)
    {
        // Retrieve active users excluding the authenticated user
        $users = User::where('active', 1)->where('id', '!=', auth()->id())->get();

        $groups = Auth::user()->groups;

        // Pass users data to the chat index view
        return view('admin.chat.index', compact('users' , 'groups'));
    }

    /**
     * Create a new chat room.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        // Get authenticated user ID
        $userId = auth()->id();
        // Get ID of the user being contacted
        $otherUserId = $request->input('other_user_id');

        // Create a new chat room between authenticated user and other user
        $room = Room::create([
            'admin_id_one' => $userId,
            'admin_id_two' => $otherUserId,
        ]);

        // Create a new notification for the other user about the new chat room
        Notification::create([
            'type' => 'App\Notifications\NewChatMessage',
            'data' => ['message' => 'new chat has been created', 'link' => route('chat.index', ['user' => $otherUserId])],
            'notifiable_id' => $otherUserId,
            'notifiable_type' => 'App\Models\User',
        ]);

        // Return the ID of the newly created chat room
        return response()->json(['room_id' => $room->id]);
    }

    /**
     * Check if a chat room exists between authenticated user and other user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkRoom(Request $request)
    {
        // Get authenticated user ID
        $authenticatedUserId = auth()->id();
        // Get ID of the other user
        $otherUserId = $request->input('other_user_id');

        // Check if a room exists between authenticated user and other user
        $room = Room::where(function($query) use ($authenticatedUserId, $otherUserId) {
            $query->where('admin_id_one', $authenticatedUserId)
                  ->orWhere('admin_id_two', $authenticatedUserId);
        })->where(function($query) use ($otherUserId) {
            $query->where('admin_id_one', $otherUserId)
                  ->orWhere('admin_id_two', $otherUserId);
        })->first();

        // If room exists, retrieve messages and other user details
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
        } else { // If room doesn't exist, only return other user details
            $otherUser = User::find($otherUserId);
            return response()->json([
                'room_exists' => false,
                'user' => $otherUser,
                'image' => $otherUser->image ? asset('images/' . $otherUser->image) : asset('assets-admin/images/users/user-vector.png')
            ]);
        }
    }

    /**
     * Mark a message as seen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function markAsSeen(Request $request)
    {
        // Get ID of the message to mark as seen
        $messageId = $request->input('message_id');
        // Find the message
        $message = RoomMessage::find($messageId);

        // If message exists, mark it as seen
        if ($message) {
            $message->seen = true;
            $message->save();
        }

        // Return success status
        return response()->json(['status' => 'success']);
    }
}
