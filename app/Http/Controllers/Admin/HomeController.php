<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\Task;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        // $tickets = Ticket::all(); // Fetch all tickets from database

        // // Prepare data for Income vs Expenses chart
        // $incomeData = [];
        // $expensesData = [];
        // $labels = [];

        // foreach ($tickets as $ticket) {
        //     // Adjust fields based on your Ticket model
        //     $incomeData[] = $ticket->someIncomeField; // Replace with actual field
        //     $expensesData[] = $ticket->someExpensesField; // Replace with actual field
        //     $labels[] = $ticket->created_at->format('M'); // Adjust label as per your data
        // }

        // $options1 = [
        //     'chart' => [
        //         'height' => 325,
        //         'type' => 'area',
        //         'toolbar' => ['show' => false],
        //     ],
        //     'colors' => ["#67c8ff", "#6d81f5"],
        //     'dataLabels' => ['enabled' => false],
        //     'stroke' => [
        //         'show' => true,
        //         'curve' => 'smooth',
        //         'width' => [1.5, 1.5],
        //         'dashArray' => [0, 4],
        //         'lineCap' => 'round',
        //     ],
        //     'series' => [
        //         ['name' => 'Income', 'data' => $incomeData],
        //         ['name' => 'Expenses', 'data' => $expensesData],
        //     ],
        //     'labels' => $labels,
        //     'yaxis' => ['labels' => ['offsetX' => -12, 'offsetY' => 0]],
        //     'grid' => [
        //         'borderColor' => '#e0e6ed',
        //         'strokeDashArray' => 3,
        //         'xaxis' => ['lines' => ['show' => true]],
        //         'yaxis' => ['lines' => ['show' => false]],
        //     ],
        //     'legend' => ['show' => false],
        //     'fill' => [
        //         'type' => 'gradient',
        //         'gradient' => [
        //             'type' => 'vertical',
        //             'shadeIntensity' => 1,
        //             'inverseColors' => false,
        //             'opacityFrom' => 0.28,
        //             'opacityTo' => 0.05,
        //             'stops' => [45, 100],
        //         ],
        //     ],
        // ];
        // Fetch the latest notifications for the authenticated user
        $notifications = Auth::user()->notifications()->orderBy('created_at', 'desc')->limit(5)->get();

        // Fetch the latest appointments
        $appointments = Appointment::with('user', 'withUser')->orderBy('start_time', 'asc')->limit(5)->get();

        $tickets = Ticket::with(['priority', 'status', 'assignedTo', 'createdBy'])
    ->orderBy('created_at', 'asc')->limit(5) // Adjust order as needed
    ->get();
    $tasks = Task::with(['title',
    'description',
    'assigned_to',
    'status',
    'due_date'])
    ->orderBy('created_at', 'asc')->limit(5) // Adjust order as needed
    ->get();

        // Fetch ticket statistics
        $newTicketsCount = Ticket::whereDate('created_at', now()->today())->count();
        $openTicketsCount = Ticket::where('StatusID', 'open')->count();
        $onHoldTicketsCount = Ticket::where('StatusID', 'on_hold')->count();
        $unassignedTicketsCount = Ticket::whereNull('AssignedTo')->count();

        return view('admin.home', compact('notifications','tasks', 'appointments', 'newTicketsCount', 'openTicketsCount', 'onHoldTicketsCount', 'unassignedTicketsCount','tickets'));
    }

    public function analytics()
    {
        return view('admin.analytics.index');
    }
}
