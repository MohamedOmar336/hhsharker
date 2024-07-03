<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\TicketHistory;
use App\Models\TicketPrioritySetting;
use App\Models\TicketStatusSetting;
use App\Models\TicketCategory;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class TicketController extends Controller
{

    /**
     * Display a listing of all tickets with optional search.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
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


    /**
     * Show the form for creating a new ticket.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tags = Tag::all();
        $users = User::all();
        $priorities = TicketPrioritySetting::all();
        $statuses = TicketStatusSetting::all();
        $categories = TicketCategory::all(); // Ensure this line is added
        return view('admin.tickets.create', compact('users', 'priorities', 'statuses', 'tags', 'categories'));
    }

    /**
     * Store a newly created ticket in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'Note' => 'nullable|string', // Validation for note
            'priority' => 'required|exists:ticket_priority_settings,id',
            'status' => 'required|exists:ticket_status_settings,id',
            'AssignedTo' => 'required|exists:users,id',
            'categories' => 'array', // Validation for categories
            'categories.*' => 'exists:ticket_categories,id',
        ]);

        $ticket = Ticket::create([
            'Title' => $request->Title,
            'Description' => $request->Description,
            'Note' => $request->Note, // Storing the note
            'PriorityID' => $request->priority,
            'StatusID' => $request->status,
            'AssignedTo' => $request->AssignedTo,
            'CreatedBy' => auth()->user()->id,
        ]);

        $ticket->categories()->attach($request->categories); // Associating categories

        TicketHistory::create([
            'TicketID' => $ticket->id,
            'ChangedBy' => $ticket->CreatedBy,
            'ChangeDescription' => 'Ticket created',
            'ChangedAt' => now()
        ]);

        Notification::create([
            'type' => 'App\Models\Ticket',
            'data' => ['message' => 'new ticket has been created', 'link' => route('tickets.my')],
            'notifiable_id' => $request->AssignedTo,
            'notifiable_type' => 'App\Models\User',
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    /**
     * Show the form for editing the specified ticket.
     *
     * @param  Ticket  $ticket
     * @return \Illuminate\View\View
     */
    public function edit(Ticket $ticket)
    {
        $users = User::all();
        $priorities = TicketPrioritySetting::all();
        $statuses = TicketStatusSetting::all();
        $categories = TicketCategory::all(); // Ensure this line is added
        return view('admin.tickets.edit', compact('ticket', 'users', 'priorities', 'statuses', 'categories'));
    }


    /**
     * Update the specified ticket in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Ticket  $ticket
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'Title' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'Note' => 'nullable|string', // Validation for note
            'priority' => 'required|exists:ticket_priority_settings,id',
            'status' => 'required|exists:ticket_status_settings,id',
            'AssignedTo' => 'required|exists:users,id',
            'categories' => 'array', // Validation for categories
            'categories.*' => 'exists:ticket_categories,id',
        ]);

        $ticket->update([
            'Title' => $request->Title,
            'Description' => $request->Description,
            'Note' => $request->Note, // Updating the note
            'PriorityID' => $request->priority,
            'StatusID' => $request->status,
            'AssignedTo' => $request->AssignedTo,
        ]);

        $ticket->categories()->sync($request->categories); // Updating categories

        TicketHistory::create([
            'TicketID' => $ticket->id,
            'ChangedBy' => $ticket->CreatedBy,
            'ChangeDescription' => 'Ticket updated',
            'ChangedAt' => now()
        ]);

        Notification::create([
            'type' => 'App\Models\Ticket',
            'data' => ['message' => 'ticket has been updated', 'link' => route('tickets.my')],
            'notifiable_id' => $request->AssignedTo,
            'notifiable_type' => 'App\Models\User',
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    /**
     * Display a specific ticket along with its history.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $ticket = Ticket::with('history')->findOrFail($id);
        return view('admin.tickets.show', compact('ticket'));
    }

    /**
     * Remove the specified ticket from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Retrieve and delete the TicketStatus
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        // Redirect to the index view with a success message
        return redirect()->route('tickets.index')
            ->with('success', 'Ticket deleted successfully.');
    }


    /**
     * Display tickets assigned to the logged-in user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function myTickets(Request $request)
    {

        $users = User::all();
        $priorities = TicketPrioritySetting::all();
        $statuses = TicketStatusSetting::all();
        $categories = TicketCategory::all(); // Ensure this line is added
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

        return view('admin.tickets.myTickets', compact('records', 'users', 'priorities', 'statuses', 'categories'));
    }

    /**
     * Update a specific field of a ticket.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  string  $field
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateField(Request $request, $id, $field)
    {
        $ticket = Ticket::findOrFail($id);

        switch ($field) {
            case 'title':
                $ticket->Title = $request->input('title');
                break;
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
        if(count($recordIds)){
            foreach ($recordIds as $recordId) {
                $record = Ticket::find($recordId);

                if (isset($record)) {
                    $record->delete($recordId);
                }
            }
        }
        return redirect()->route('tickets.index')
            ->with('success', 'Ticket deleted successfully.');
    }
}
