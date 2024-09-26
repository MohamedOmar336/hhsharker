<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\GroupMember;

class GroupController extends Controller
{
    public function index(Request $request)
    {
        $query = Group::query();

        if ($request->has('search')) {
            $query->where('name', 'LIKE', "%{$request->search}%")
                ->orWhere('description', 'LIKE', "%{$request->search}%");
        }
        $totalResults = $query->count();

        $records = $query->latest()->paginate($totalResults);
        return view('admin.groups.index', compact('records'));
    }

    public function create()
    {
        $users = User::all(); // Fetch all users to display in the form
        return view('admin.groups.create' , compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'created_by' => 'required|exists:users,id',
            'members' => 'array|nullable',
            'members.*' => 'exists:users,id',
        ]);
        
        $group = Group::create($request->all());
        
        if ($request->members) {
            foreach ($request->members as $userId) {
                GroupMember::create([
                    'group_id' => $group->id,
                    'user_id' => $userId,
                    'role' => 'member'
                ]);
            }
        }
        

        return redirect()->route('groups.index')->with('success', __('messages.group_created_successfully'));

    }

    public function show(Group $group)
    {
        return view('admin.groups.show', compact('group'));
    }

    public function edit(Group $group)
    {
        $users = User::all(); // Fetch all users to display in the form
        return view('admin.groups.edit', compact('group' , 'users'));
    }


    public function update(Request $request, Group $group)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'members' => 'array', // Ensure members is an array
        ]);

        // Update the group's attributes with the data from the request
        $group->update($request->only('name', 'description'));
        // Sync the group's members with the selected member IDs
        $group->members()->sync($request->members);
        // Redirect the user back to the index page with a success message
        return redirect()->route('groups.index')->with('success', __('messages.group_updated_successfully'));
    }

    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('groups.index')->with('success', __('messages.group_deleted_successfully'));
    }

    public function bulkDelete(Request $request)
{
    $request->validate([
        'ids' => 'required|array', // Validate that 'ids' is an array
        'ids.*' => 'exists:groups,id', // Ensure each ID exists in the groups table
    ]);

    // Delete each group by ID
    foreach ($request->ids as $id) {
        $group = Group::find($id);
        if ($group) {
            $group->members()->delete(); // Delete associated members if needed
            $group->delete(); // Delete the group
        }
    }

    return redirect()->route('groups.index')->with('success', __('messages.groups_bulk_deleted_successfully'));
}

}
