<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Group;
use App\Models\GroupContact;
use Illuminate\Http\Request;
use App\Exports\ContactsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ContactsImport;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $query = Contact::with('groups'); // Eager load groups with contacts

    if ($request->has('search')) {
        $searchTerm = $request->search;
        $query->where(function ($q) use ($searchTerm) {
            $q->where('name', 'LIKE', "%{$searchTerm}%")
              ->orWhere('email', 'LIKE', "%{$searchTerm}%")
              ->orWhere('phone', 'LIKE', "%{$searchTerm}%")
              ->orWhere('address', 'LIKE', "%{$searchTerm}%")
              ->orWhere('segment', 'LIKE', "%{$searchTerm}%");
        });
    }
    $totalResults = $query->count();

    $records = $query->latest()->paginate($totalResults);

    return view('admin.contacts.index', compact('records'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all(); // Fetch all groups

        return view('admin.contacts.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'segment' => 'nullable|string|max:255',
            'last_interaction' => 'nullable|date',
            'groups' => 'array', // Ensure 'groups' is an array
        ]);

        $contact = Contact::create($request->only('name', 'email', 'phone', 'address', 'segment', 'last_interaction'));

        // Attach groups to the contact
        if ($request->has('groups')) {
            foreach ($request->groups as $groupId) {
                GroupContact::create([
                    'group_id' => $groupId,
                    'contact_id' => $contact->id,
                ]);
            }
        }

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $groups = Group::all(); // Fetch all groups
        $contactGroups = $contact->groups->map(function ($group) {
            return $group->id;
        })->toArray(); // Get IDs of groups associated with the contact

        return view('admin.contacts.edit', compact('contact', 'groups', 'contactGroups'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'segment' => 'nullable|string|max:255',
            'last_interaction' => 'nullable|date',
            'groups' => 'array', // Ensure 'groups' is an array
        ]);

        // Update contact details
        $contact->update($request->only('name', 'email', 'phone', 'address', 'segment', 'last_interaction'));

        // Sync groups with contact
        if ($request->has('groups')) {
            $groupIds = $request->groups;
        } else {
            $groupIds = []; // If no groups are selected, set an empty array
        }

        // Sync the group contacts for the contact
        $contact->groups()->sync($groupIds);

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        // Detach all groups associated with the contact before deleting
        $contact->groups()->detach();

        // Delete the contact
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }

    public function export()
    {

        return Excel::download(new ContactsExport, 'contacts.xlsx');
    }

    public function importForm()
    {
        return view('admin.contacts.import'); // Make sure to create this view
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required|file|mimes:xlsx',
        ]);

        Excel::import(new ContactsImport, $request->file('import_file'));

        return redirect()->route('contacts.index')->with('success', 'Contacts imported successfully.');
    }


    public function bulkDelete(Request $request)
{
    $request->validate([
        'ids' => 'required|array', // Validate that 'ids' is an array
        'ids.*' => 'exists:contacts,id', // Ensure each ID exists in the contacts table
    ]);

    // Detach all groups for each contact before deleting
    foreach ($request->ids as $id) {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->groups()->detach(); // Detach groups
            $contact->delete(); // Delete the contact
        }
    }

    return redirect()->route('contacts.index')->with('success', 'Contacts deleted successfully.');
}

}

