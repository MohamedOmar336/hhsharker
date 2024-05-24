<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\TicketHistory;
use App\Models\TicketPrioritySetting;
use App\Models\TicketStatusSetting;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    // Display all tickets
    public function index()
    {

        $tickets = Ticket::with('priority', 'status', 'assignedTo', 'createdBy')->get();
        return view('admin.tickets.index', compact('tickets'));
    }

    // Display form for creating a new ticket
    public function create()
    {   $tags = Tag::all();
        $users = User::all();
        $priorities = TicketPrioritySetting::all();
        $statuses = TicketStatusSetting::all();
        return view('admin.tickets.create', compact('users','priorities','statuses','tags'));
    }

    // Store a newly created ticket in the database
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'priority' => 'required|exists:ticket_priority_settings,id',
            'status' => 'required|exists:ticket_status_settings,id',
            'AssignedTo' => 'required|exists:users,id',
        ]);

        $ticket = Ticket::create([
            'Title' => $request->Title,
            'Description' => $request->Description,
            'PriorityID' => $request->priority,
            'StatusID' => $request->status,
            'AssignedTo' => $request->AssignedTo,
            'CreatedBy' => auth()->user()->id,
        ]);
        // Create an entry in the ticket_histories table
        TicketHistory::create([
            'TicketID' => $ticket->id,
            'ChangedBy' => $ticket->CreatedBy,
            'ChangeDescription' => $request->Description,
            'ChangedAt' => now()
        ]);


        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    // Display form for editing a ticket
    public function edit(Ticket $ticket)
    {
        $users = User::all();
        $priorities = TicketPrioritySetting::all();
        $statuses = TicketStatusSetting::all();
        return view('admin.tickets.edit', compact('ticket','users','priorities','statuses'));
    }

    // Update the specified ticket in the database
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'Title' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'priority' => 'required|exists:ticket_priority_settings,id',
            'status' => 'required|exists:ticket_status_settings,id',
            'AssignedTo' => 'required|exists:users,id',
        ]);

        $ticket->update([
            'Title' => $request->Title,
            'Description' => $request->Description,
            'PriorityID' => $request->priority,
            'StatusID' => $request->status,
            'AssignedTo' => $request->AssignedTo,
        ]);

         // Create an entry in the ticket_histories table
        TicketHistory::create([
            'TicketID' => $ticket->id,
            'ChangedBy' => $ticket->CreatedBy,
            'ChangeDescription' => $request->Description,
            'ChangedAt' => now()
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    public function show($id)
    {
        $ticket = Ticket::with('history')->findOrFail($id);
        return view('admin.tickets.show', compact('ticket'));
    }
    // Display the ticket history
   /* public function show(Ticket $ticket)
    {
        $history = TicketHistory::where('TicketID', $ticket->TicketID)->with('changedBy')->get();
        return view('admin.tickets.show', compact('ticket', 'history'));
    }*/

    public function destroy($id)
    {
        // Retrieve and delete the TicketStatus
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        // Redirect to the index view with a success message
        return redirect()->route('tickets.index')
                         ->with('success', 'Ticket deleted successfully.');
    }

    // Display the tickets created by the logged-in user
    public function myTickets()
    {
        $tickets = Ticket::where('assignedTo', Auth::id())->with('priority', 'status', 'assignedTo')->get();
        return view('admin.tickets.myTickets', compact('tickets'));
    }
}
