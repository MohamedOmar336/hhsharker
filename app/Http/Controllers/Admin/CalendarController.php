<?php
// App/Http/Controllers/Admin/CalendarController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class CalendarController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();

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
