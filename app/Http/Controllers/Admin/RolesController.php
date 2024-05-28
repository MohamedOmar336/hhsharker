<?php

namespace App\Http\Controllers\Admin;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enums\EnumsSettings;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Roles::query();

        if ($request->has('search')) {
            $query->where('name', 'LIKE', "%{$request->search}%")
                ->orWhere('description', 'LIKE', "%{$request->search}%");
        }

        $records = $query->paginate(500);
        return view('admin.roles.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acls = include app_path('Helpers/acl.php');

        return view('admin.roles.create' , compact('acls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'permission_type' => 'nullable|string',
            'permissions' => 'nullable|array',
        ]);

        $role = Roles::create($validatedData);
        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $role)
    {
        $acls = include app_path('Helpers/acl.php');
        $record = $role ;
        return view('admin.roles.edit', compact('record' , 'acls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $role)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'permission_type' => 'nullable|string',
            'permissions' => 'nullable|array',
        ]);

        $role->update($validatedData);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
