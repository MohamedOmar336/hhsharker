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
    
        $totalResults = $query->count();

    $records = $query->latest()->paginate($totalResults);
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
        try {
            // Retrieve and delete the TicketPriority
            $priority = TicketPrioritySetting::findOrFail($id);
            $priority->delete();
    
            // Redirect to the index view with a success message
            return redirect()->route('ticket-priorities.index')->with('success', 'Ticket Priority deleted successfully.');
        } catch (\Exception $e) {
            // If there's an exception, redirect with the error message
            return redirect()->route('ticket-priorities.index')->with('error', $e->getMessage());
        }
    }
    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:ticket_priority_settings,id',
        ]);
    
        try {
            // Loop through each ID and try to delete them one by one
            foreach ($request->ids as $id) {
                $priority = TicketPrioritySetting::findOrFail($id);
                $priority->delete();
            }
    
            return redirect()->route('ticket-priorities.index')->with('success', 'Ticket Priorities deleted successfully.');
        } catch (\Exception $e) {
            // If any exception occurs during deletion, catch it and return with error message
            return redirect()->route('ticket-priorities.index')->with('error', $e->getMessage());
        }
    }
    
}
