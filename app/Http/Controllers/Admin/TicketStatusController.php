<?php

namespace App\Http\Controllers\Admin;

use App\Models\TicketStatusSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketStatusController extends Controller
{
    public function index()
    {
        // Retrieve all TicketStatuses
        $statuses = TicketStatusSetting::latest()->paginate(EnumsSettings::Paginate);
        // Return a view with the data
        return view('admin.ticketstatus.index', compact('statuses'));
    }

    public function create()
    {
        // Return a view for creating a new TicketStatus
        return view('admin.ticketstatus.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'Name_ar' => 'required|string|max:255',
            'Name_en' => 'required|string|max:255',
            'Description_ar' => 'nullable|string',
            'Description_en' => 'nullable|string',
        ]);

        // Create a new TicketStatus
        $status = TicketStatusSetting::create($request->all());

        // Redirect to the index view with a success message
        return redirect()->route('ticket-statuses.index')
                         ->with('success', 'Ticket Status created successfully.');
    }

    public function show($id)
    {
        // Retrieve a specific TicketStatus
        $status = TicketStatusSetting::findOrFail($id);
        // Return a view with the data
        return view('admin.ticket_statuses.show', compact('status'));
    }

    public function edit($id)
    {
        // Retrieve a specific TicketStatus
        $status = TicketStatusSetting::findOrFail($id);
        // Return a view for editing the TicketStatus
        return view('admin.ticketstatus.edit', compact('status'));
    }

    public function update(Request $request, $id)
    {
        // Validate request
        $request->validate([
            'Name_ar' => 'sometimes|required|string|max:255',
            'Name_en' => 'sometimes|required|string|max:255',
            'Description_ar' => 'nullable|string',
            'Description_en' => 'nullable|string',
        ]);

        // Retrieve and update the TicketStatus
        $status = TicketStatusSetting::findOrFail($id);
        $status->update($request->all());

        // Redirect to the show view with a success message
        return redirect()->route('ticket-statuses.index')
                         ->with('success', 'Ticket Status updated successfully.');
    }

    public function destroy($id)
    {
        // Retrieve and delete the TicketStatus
        $status = TicketStatusSetting::findOrFail($id);
        $status->delete();

        // Redirect to the index view with a success message
        return redirect()->route('ticket-statuses.index')->with('success', 'Ticket Status deleted successfully.');
    }
}
