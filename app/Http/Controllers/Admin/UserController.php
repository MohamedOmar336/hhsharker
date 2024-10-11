<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Enums\EnumsSettings;
use App\Models\Roles;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->has('search')) {
            $query->where('name_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('name_en', 'LIKE', "%{$request->search}%")
                ->orWhere('description_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('description_en', 'LIKE', "%{$request->search}%");
        }

        $totalResults = $query->count();

    $records = $query->latest()->paginate($totalResults);
        return view("admin.users.index", compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Roles::all();
        return view("admin.users.create" , compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data.
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'user_name' => 'required|string|unique:users,user_name',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'active' => 'boolean',
        ]);

         // If role_id is null, set it to 'member' (or any default role ID for 'member')
    if (empty($request->role_id)) {
        $validatedData['role_id'] = 3; // Adjust this based on how you identify roles
    }

        // Handle image upload if provided
    if ($request->hasFile('image')) {
        $imageName = uploadImage($request->file('image'));
        $validatedData['image'] = $imageName;
    }

        // Hash the password
        $validatedData['password'] = bcrypt($request->password);
        // Create the user
        $user = User::create($validatedData);

        // Redirect back to the index page with a success message
        return redirect()->route('users.index')->with('success', __('messages.user_created'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        $record = $User;
        $roles = Roles::all();
        return view("admin.users.edit" , compact('record' , 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data.
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'user_name' => 'required|string|unique:users,user_name,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'phone' => 'required|string',
            'role_id' => 'required|string',
            'active' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Find the user by id
        $user = User::findOrFail($id);

        // Update the user details
        $user->update($data);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete previous image if exists
            if ($user->image) {
                Storage::delete($user->image);
            }
            // Upload new image
            $imagePath = $this->uploadImage($request->file('image')); // Using uploadImage() function
            // Update user's image
            $user->update(['image' => $imagePath]);
        }
        session()->flash('success', __('messages.deleted_successfully'));

        // Redirect back to the index page with a success message
        return redirect()->route('users.index')->with('success', __('messages.user_updated'));
    }



    /**
     * Remove the specified user from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, User $user)
    {
        // Delete the user
        $user->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('users.index')->with('success', __('messages.user_deleted'));
    }

    /**
     * Mass Delete the users.
     *
     * @return \Illuminate\Http\Response
    **/
    public function massDestroy()
    {
        $recordIds = request()->input('ids');
        if(count($recordIds)){
            foreach ($recordIds as $recordId) {
                $record = User::find($recordId);

                if (isset($record)) {
                    $record->delete($recordId);
                }
            }
        }
        return redirect()->route('users.index')
            ->with('success', __('messages.users_deleted'));
    }
}