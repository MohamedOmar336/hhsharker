<?php

namespace App\Http\Controllers\Admin;

use App\Models\TicketStatusSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketStatusController extends Controller
{

    public function index(Request $request)
    {
        $query = TicketStatusSetting::query();

        if ($request->has('search')) {
            $query->where('name_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('name_en', 'LIKE', "%{$request->search}%")
                ->orWhere('description_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('description_en', 'LIKE', "%{$request->search}%");
        }

        $totalResults = $query->count();

    $records = $query->latest()->paginate($totalResults);
        return view('admin.ticketstatus.index', compact('records'));
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
        ->with('success', __('messages.ticket_status_created'));
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
        ->with('success', __('messages.ticket_status_updated'));
    }

    public function destroy($id)
{
    try {
        // Retrieve and delete the TicketStatus
        $status = TicketStatusSetting::findOrFail($id);
        $status->delete();

        // Redirect to the index view with a success message
        return redirect()->route('ticket-statuses.index')
                ->with('success', __('messages.ticket_status_deleted'));
    } catch (\Exception $e) {
        // If there's an exception (such as linked tickets), redirect with error message
        return redirect()->route('ticket-statuses.index')->with('error', $e->getMessage());
    }
}


public function bulkDelete(Request $request)
{
    $request->validate([
        'ids' => 'required|array',
        'ids.*' => 'exists:ticket_status_settings,id',
    ]);

    try {
        // Loop through each ID and try to delete them one by one
        foreach ($request->ids as $id) {
            $status = TicketStatusSetting::findOrFail($id);
            $status->delete();
        }

        return redirect()->route('ticket-statuses.index')
        ->with('success', __('messages.ticket_statuses_deleted')); 
    } catch (\Exception $e) {
        // If any exception occurs during deletion, catch it and return with error message
        return redirect()->route('ticket-statuses.index')->with('error', $e->getMessage());
    }
}

    
}
