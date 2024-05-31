<?php
// App/Http/Controllers/Admin/CalendarController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $appointments = Appointment::where(function($query) use ($userId) {
            $query->where('user_id', $userId)
                  ->orWhere('with_user_id', $userId);
        })->get();

        $events = $appointments->map(function ($appointment) {
            return [
                'title' => $appointment->title,
                'start' => $appointment->start_time,
                'end' => $appointment->finish_time,
                'status' => $appointment->status,
                'description' => $appointment->notes,
            ];
        });

        return view('admin.calendar.index', ['events' => $events]);
    }
}
