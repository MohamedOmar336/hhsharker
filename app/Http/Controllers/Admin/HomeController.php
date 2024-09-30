<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\Task;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\TicketStatusSetting;

class HomeController extends Controller
{


    public function index()
    {

         // Retrieve tickets data grouped by months
    $ticketData = Ticket::select(
        DB::raw('MONTH(created_at) as month'),
        DB::raw('count(id) as ticket_count')
    )
    ->groupBy('month')
    ->get()
    ->pluck('ticket_count', 'month')
    ->toArray();

// Fill in missing months with 0
$monthlyTickets = array_fill(1, 12, 0);
foreach ($ticketData as $month => $count) {
    $monthlyTickets[$month] = $count;
}

     
        // Fetch the latest notifications for the authenticated user
        $notifications = Auth::user()->notifications()->orderBy('created_at', 'desc')->limit(5)->get();

        // Fetch the latest appointments
        $appointments = Appointment::with('user', 'withUser')->orderBy('start_time', 'asc')->limit(5)->get();

        $tickets = Ticket::with(['priority', 'status', 'assignedTo', 'createdBy'])
    ->orderBy('created_at', 'asc')->limit(5)->get();
    $tasks = Task::select(['id','title', 'description', 'assigned_to', 'status', 'due_date'])
    ->with('assignedTo')->orderBy('created_at', 'asc')->limit(5)->get();

        // Fetch ticket statistics
        $ticketCount = Ticket::count();
        $openStatusID = TicketStatusSetting::where('Name_en', 'open')->value('id') ?? 0;
        $onHoldStatusID = TicketStatusSetting::where('Name_en', 'on_hold')->value('id') ?? 0;
        
        $openTicketsCount = Ticket::where('StatusID', $openStatusID)->count();
        $onHoldTicketsCount = Ticket::where('StatusID', $onHoldStatusID)->count();
        $unassignedTicketsCount = Ticket::whereNull('AssignedTo')->count();

        return view('admin.home', compact('notifications','tasks', 'appointments', 'ticketCount', 'openTicketsCount', 'onHoldTicketsCount', 'unassignedTicketsCount','tickets','monthlyTickets'));
    }

    public function analytics()
    {
        return view('admin.analytics.index');
    }
}
