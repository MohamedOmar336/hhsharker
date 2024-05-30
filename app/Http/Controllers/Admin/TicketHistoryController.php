<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TicketHistory;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketHistoryController extends Controller
{
    // Display all ticket histories
    public function index()
    {
        $records = TicketHistory::with('ticket', 'changedBy')->get();
        return view('admin.ticket_histories.index', compact('records'));
    }

    // Display the ticket history for a specific ticket by TicketID
    public function showByTicketId($ticketId)
    {
        $ticket = Ticket::with('priority', 'status', 'assignedTo', 'createdBy')
                        ->findOrFail($ticketId);
        $histories = TicketHistory::where('TicketID', $ticketId)->with('changedBy')->get();
        
        return view('admin.ticketS.show', compact('ticket', 'histories'));
    }

    // Display form for creating a new ticket history (if needed)
    public function create()
    {
        $tickets = Ticket::all();
        $users = User::all();
        return view('admin.ticket_histories.create', compact('tickets', 'users'));
    }

    // Store a newly created ticket history in the database (if needed)
    public function store(Request $request)
    {
        $request->validate([
            'TicketID' => 'required|exists:tickets,id',
            'ChangedBy' => 'required|exists:users,id',
            'ChangeDescription' => 'nullable|string',
            'ChangedAt' => 'required|date',
        ]);

        TicketHistory::create($request->all());

        return redirect()->route('admin.ticket_histories.index')
                         ->with('success', 'Ticket history created successfully.');
    }

    // Display form for editing a ticket history (if needed)
    public function edit($id)
    {
        $history = TicketHistory::findOrFail($id);
        $tickets = Ticket::all();
        $users = User::all();
        return view('admin.ticket_histories.edit', compact('history', 'tickets', 'users'));
    }

    // Update the specified ticket history in the database (if needed)
    public function update(Request $request, $id)
    {
        $request->validate([
            'TicketID' => 'sometimes|required|exists:tickets,id',
            'ChangedBy' => 'sometimes|required|exists:users,id',
            'ChangeDescription' => 'nullable|string',
            'ChangedAt' => 'required|date',
        ]);

        $history = TicketHistory::findOrFail($id);
        $history->update($request->all());

        return redirect()->route('admin.ticket_histories.show_by_ticket', $history->TicketID)
                         ->with('success', 'Ticket history updated successfully.');
    }

    // Remove the specified ticket history from the database
    public function destroy($id)
    {
        $history = TicketHistory::findOrFail($id);
        $ticketId = $history->TicketID;
        $history->delete();

        return redirect()->route('admin.ticket_histories.show_by_ticket', $ticketId)
                         ->with('success', 'Ticket history deleted successfully.');
    }
}
