<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of all appointments.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $appointments = Appointment::with(['user', 'withUser'])->get();
        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Display a listing of the authenticated user's appointments.
     *
     * @return \Illuminate\View\View
     */
    public function myAppointments()
    {
        $appointments = Appointment::with(['user', 'withUser'])
            ->where('user_id', Auth::id())
            ->get();
        return view('admin.appointments.myAppointments', compact('appointments'));
    }

    /**
     * Show the form for creating a new appointment.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users = User::all();
        return view('admin.appointments.create', compact('users'));
    }

    /**
     * Store a newly created appointment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|string',
            'with_user_id' => 'required|exists:users,id',
            'start_time' => 'required|date',
            'finish_time' => 'required|date|after:start_time',
            'status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $appointment = new Appointment();
        $appointment->user_id = Auth::id();
        $appointment->title = $request->title;
        $appointment->with_user_id = $request->with_user_id;
        $appointment->start_time = $request->start_time;
        $appointment->finish_time = $request->finish_time;
        $appointment->status = $request->status;
        $appointment->notes = $request->notes;
        $appointment->save();

        return redirect()->route('appointments.index')->with('success', 'Appointment created successfully.');
    }

    /**
     * Display the specified appointment.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\View\View
     */
    public function show(Appointment $appointment)
    {
        return view('admin.appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified appointment.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\View\View
     */
    public function edit(Appointment $appointment)
    {
        $users = User::all();
        return view('admin.appointments.edit', compact('appointment', 'users'));
    }

    /**
     * Update the specified appointment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'title' => 'required|string',
            'with_user_id' => 'required|exists:users,id',
            'start_time' => 'required|date',
            'finish_time' => 'required|date|after:start_time',
            'status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $appointment->title = $request->title;
        $appointment->with_user_id = $request->with_user_id;
        $appointment->start_time = $request->start_time;
        $appointment->finish_time = $request->finish_time;
        $appointment->status = $request->status;
        $appointment->notes = $request->notes;
        $appointment->save();

        return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully.');
    }

    /**
     * Remove the specified appointment from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
