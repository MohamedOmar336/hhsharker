<?php

namespace App\Http\Controllers\Admin;

use App\Models\TicketPrioritySetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketPriorityController extends Controller
{
    public function index(Request $request)
    {
        $query = TicketPrioritySetting::query();
    
        // If there's a search query, add where clauses
        if ($request->has('search')) {
            $query->where('name_ar', 'LIKE', "%{$request->search}%")
                  ->orWhere('name_en', 'LIKE', "%{$request->search}%")
                  ->orWhere('status', 'LIKE', "%{$request->search}%");
        }
    
        // Paginate the results
        $records = $query->latest()->paginate(500);
    
        // Return the view with the data
        return view('admin.ticketPriority.index', compact('records'));
    }
    

    public function create()
    {
        // Return a view for creating a new TicketPriority
        return view('admin.ticketPriority.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'Name_ar' => 'required|string|max:255',
            'Name_en' => 'required|string|max:255',
            'Status' => 'required|string|max:255',
        ]);

        // Create a new TicketPriority
        $priority = TicketPrioritySetting::create($request->all());

        // Redirect to the index view with a success message
        return redirect()->route('ticket-priorities.index')
                         ->with('success', 'Ticket Priority created successfully.');
    }

    public function show($id)
    {
        // Retrieve a specific TicketPriority
        $priority = TicketPrioritySetting::findOrFail($id);
        // Return a view with the data
        return view('admin.ticketPriority.show', compact('priority'));
    }

    public function edit($id)
    {
        // Retrieve a specific TicketPriority
        $priority = TicketPrioritySetting::findOrFail($id);
        // Return a view for editing the TicketPriority
        return view('admin.ticketPriority.edit', compact('priority'));
    }

    public function update(Request $request, $id)
    {
        // Validate request
        $request->validate([
            'Name_ar' => 'sometimes|required|string|max:255',
            'Name_en' => 'sometimes|required|string|max:255',
            'Status' => 'sometimes|required|string|max:255',
        ]);

        // Retrieve and update the TicketPriority
        $priority = TicketPrioritySetting::findOrFail($id);
        $priority->update($request->all());

        // Redirect to the show view with a success message
        return redirect()->route('ticket-priorities.index')
                         ->with('success', 'Ticket Priority updated successfully.');
    }

    public function destroy($id)
    {
        // Retrieve and delete the TicketPriority
        $priority = TicketPrioritySetting::findOrFail($id);
        $priority->delete();

        // Redirect to the index view with a success message
        return redirect()->route('ticket-priorities.index')
                         ->with('success', 'Ticket Priority deleted successfully.');
    }
}
