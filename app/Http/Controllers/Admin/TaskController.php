<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(Request $request)
    {   
        $query = Task::query();
        if ($request->has('search')) {
            $query->where('title', 'LIKE', "%{$request->search}%")
                ->orWhere('description', 'LIKE', "%{$request->search}%")
                ->orWhere('assigned_to', 'LIKE', "%{$request->search}%")
                ->orWhere('status', 'LIKE', "%{$request->search}%");
        }

        // Apply status filter
    if ($request->has('status') && !empty($request->status)) {
        $query->where('status', $request->status);
    }

    // Apply assignedTo filter
    if ($request->has('assigned_to') && !empty($request->assigned_to)) {
        $query->where('assigned_to', $request->assigned_to);
    }
    $totalResults = $query->count();

    $records = $query->latest()->paginate(500);
        $users = User::all();
        return view('admin.tasks.index', compact('records','users'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.tasks.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'assigned_to' => 'nullable|exists:users,id',
            'status' => 'required|in:pending,in_progress,completed,archived',
            'due_date' => 'nullable|date',
        ]);

        $task = Task::create($request->all());

        Notification::create([
            'type' => 'App\Models\task',
            'data' => ['message' => 'new task has been created', 'link' => route('tasks.show', $task->id)],
            'notifiable_id' => $request->assigned_to,
            'notifiable_type' => 'App\Models\User',
        ]);

        return redirect()->route('tasks.index')->with('success', __('messages.task_created_successfully'));

    }

    public function show(Task $task)
    {
        return view('admin.tasks.show', compact('task'));
    }

    public function mytasks()
    {   
        $users = User::all();
        
        // Retrieve tasks assigned to the authenticated user
        $records = Task::where('assigned_to', Auth::id())->get();

        // Pass the tasks to the view
        return view('admin.tasks.mytasks', compact('records','users'));
    }

    public function edit(Task $task)
    {
        $users = User::all();
        return view('admin.tasks.edit', compact('task','users'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'assigned_to' => 'nullable|exists:users,id',
            'status' => 'required|in:pending,in_progress,completed,archived',
            'due_date' => 'nullable|date',
        ]);

        $task->update($request->all());
        Notification::create([
            'type' => 'App\Models\task',
            'data' => ['message' => 'Task updated.', 'link' => route('tasks.show', $task->id)],
            'notifiable_id' => $request->assigned_to,
            'notifiable_type' => 'App\Models\User',
        ]);

        return redirect()->route('tasks.index')->with('success', __('messages.task_updated_successfully'));

    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id); // Find the task by its ID
        $task->delete(); // This will delete the task
        return redirect()->route('tasks.index')->with('success', __('messages.task_deleted_successfully'));

    }

    public function bulkDelete(Request $request)
{
    $request->validate([
        'ids' => 'required|array', // Validate that 'ids' is an array
        'ids.*' => 'exists:tasks,id', // Ensure each ID exists in the tasks table
    ]);

    // Delete each task by ID
    Task::destroy($request->ids);

    return redirect()->route('tasks.index')->with('success', __('messages.tasks_deleted_successfully'));
}
}


