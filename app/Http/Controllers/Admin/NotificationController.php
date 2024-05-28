<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function markAsRead($id)
    {
        // $notification = Auth::user()->notifications()->findOrFail($id);
        // $notification->markAsRead();

        return redirect()->back()->with('success', 'Notification marked as read.');
    }
}
