<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class AppointmentController extends Controller
{
    /**
     * Display a listing of all appointments.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = Appointment::with(['user', 'withUser']);

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('user', 'LIKE', "%{$searchTerm}%")
                ->orWhere('withUser', 'LIKE', "%{$searchTerm}%")
                ->orWhere('title', 'LIKE', "%{$searchTerm}%")
                ->orWhere('status', 'LIKE', "%{$searchTerm}%")
                ->orWhere('notes', 'LIKE', "%{$searchTerm}%");
        }

        $totalResults = $query->count();

        $records = $query->latest()->paginate($totalResults);
        return view('admin.appointments.index', compact('records'));
    }


    /**
     * Display a listing of the authenticated user's appointments.
     *
     * @return \Illuminate\View\View
     */
    public function myAppointments(Request $request)
    {
        $query = Appointment::with(['user', 'withUser'])
            ->where('user_id', Auth::id());


        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->orWhere('priority', 'LIKE', "%{$search}%")
                ->orWhere('status', 'LIKE', "%{$search}%")
                ->orWhere('assignedTo', 'LIKE', "%{$search}%")
                ->orWhere('createdBy', 'LIKE', "%{$search}%");
        }

        $records = $query->paginate(500);
        return view('admin.appointments.myAppointments', compact('records'));
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
            'title' => 'required|string',
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

        Notification::create([
            'type' => 'App\Models\Ticket',
            'data' => ['message' => 'New appointment created', 'link' => route('appointments.show',$appointment->id)],
            'notifiable_id' => $request->with_user_id,
            'notifiable_type' => 'App\Models\User',
        ]); 

        Notification::create([
            'type' => 'App\Models\Ticket',
            'data' => ['message' => 'Appointment assigned to you', 'link' => route('appointments.show',$appointment->id)],
            'notifiable_id' => Auth::id(),
            'notifiable_type' => 'App\Models\User',
        ]);
        return redirect()->route('appointments.index')->with('success', __('messages.appointment_created'));
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

        Notification::create([
            'type' => 'App\Models\Ticket',
            'data' => ['message' => 'Appointment updated.', 'link' => route('appointments.show',$appointment->id)],
            'notifiable_id' => Auth::id(),
            'notifiable_type' => 'App\Models\User',
        ]); 

        Notification::create([
            'type' => 'App\Models\Ticket',
            'data' => ['message' => 'Appointment updated.', 'link' =>route('appointments.show',$appointment->id)],
            'notifiable_id' => $request->with_user_id,
            'notifiable_type' => 'App\Models\User',
        ]);
        
return redirect()->route('appointments.index')->with('success', __('messages.appointment_updated'));
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
        return redirect()->route('appointments.index')->with('success', __('messages.appointment_deleted'));
    }

    public function bulkDelete(Request $request)
{
   // dd($request->all());
    // Validate that the 'ids' array is present and contains valid appointment IDs
    $request->validate([
        'ids' => 'required|array',
        'ids.*' => 'exists:appointments,id',
    ]);

    // Retrieve IDs from the request
    $recordIds = $request->input('ids');

    // Perform the deletion
    Appointment::whereIn('id', $recordIds)->delete();

    // Delete the selected appointments
   // Appointment::whereIn('id', $request->ids)->delete();

   return redirect()->route('appointments.index')->with('success', __('messages.appointments_deleted'));}

}
