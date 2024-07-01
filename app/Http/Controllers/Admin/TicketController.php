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
use App\Models\Notification;

class TicketController extends Controller
{
    // Display all tickets
    public function index(Request $request)
    {
        $query = Ticket::with('priority', 'status', 'assignedTo', 'createdBy');

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
        $priorities = TicketPrioritySetting::all();
        $statuses = TicketStatusSetting::all();
        $users = User::all();

        return view('admin.tickets.index', compact('records', 'priorities', 'statuses', 'users'));

    }

    // Display form for creating a new ticket
    public function create()
    {
        $tags = Tag::all();
        $users = User::all();
        $priorities = TicketPrioritySetting::all();
        $statuses = TicketStatusSetting::all();
        return view('admin.tickets.create', compact('users', 'priorities', 'statuses', 'tags'));
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
        // Create a new notification without specifying the id
        Notification::create([
            'type' => 'App\Models\Ticket',
            'data' => ['message' => 'new ticket has been created', 'link' => route('tickets.my')],
            'notifiable_id' => $request->AssignedTo, // Replace with the appropriate notifiable ID
            'notifiable_type' => 'App\Models\User', // Replace with the appropriate notifiable type
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    // Display form for editing a ticket
    public function edit(Ticket $ticket)
    {
        $users = User::all();
        $priorities = TicketPrioritySetting::all();
        $statuses = TicketStatusSetting::all();
        return view('admin.tickets.edit', compact('ticket', 'users', 'priorities', 'statuses'));
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

        // Create a new notification without specifying the id
        Notification::create([
            'type' => 'App\Models\Ticket',
            'data' => ['message' => 'ticket has been updated', 'link' => route('tickets.my')],
            'notifiable_id' => $request->AssignedTo, // Replace with the appropriate notifiable ID
            'notifiable_type' => 'App\Models\User', // Replace with the appropriate notifiable type
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    public function show($id)
    {
        $ticket = Ticket::with('history')->findOrFail($id);
        return view('admin.tickets.show', compact('ticket'));
    }

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
    public function myTickets(Request $request)
    {
        $query = Ticket::where('assignedTo', Auth::id())->with('priority', 'status', 'assignedTo');

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

        return view('admin.tickets.myTickets', compact('records'));
    }
    public function updateField(Request $request, $id, $field)
    {
        $ticket = Ticket::findOrFail($id);

        switch ($field) {
            case 'priority':
                $ticket->PriorityID = $request->input('priority_id');
                break;
            case 'status':
                $ticket->StatusID = $request->input('status_id');
                break;
            case 'assigned_to':
                $ticket->AssignedTo = $request->input('assigned_to');
                break;
            default:
                return redirect()->back()->with('error', 'Invalid field');
        }

        $ticket->save();

        return redirect()->back()->with('success', 'Ticket updated successfully');
    }

    /**
     * Mass Delete the products.
     *
     * @return \Illuminate\Http\Response
    **/
    public function massDestroy()
    {
        $recordIds = request()->input('ids');

        foreach ($recordIds as $recordId) {
            $record = Ticket::find($recordId);

            if (isset($product)) {
                $record->delete($recordId);
            }
        }
        return redirect()->route('tickets.index')
            ->with('success', 'Ticket deleted successfully.');
    }
}
