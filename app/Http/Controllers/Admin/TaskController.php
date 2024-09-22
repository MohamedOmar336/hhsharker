<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Notification;

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

    $records = $query->latest()->paginate($totalResults);
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

        Task::create($request->all());

        Notification::create([
            'type' => 'App\Models\task',
            'data' => ['message' => 'new task has been created', 'link' => route('tasks.index')],
            'notifiable_id' => $request->assigned_to,
            'notifiable_type' => 'App\Models\User',
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function show(Task $task)
    {
        return view('admin.tasks.show', compact('task'));
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
            'data' => ['message' => 'Task updated.', 'link' => route('tasks.index')],
            'notifiable_id' => $request->assigned_to,
            'notifiable_type' => 'App\Models\User',
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id); // Find the task by its ID
        $task->delete(); // This will delete the task
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }

    public function bulkDelete(Request $request)
{
    $request->validate([
        'ids' => 'required|array', // Validate that 'ids' is an array
        'ids.*' => 'exists:tasks,id', // Ensure each ID exists in the tasks table
    ]);

    // Delete each task by ID
    Task::destroy($request->ids);

    return redirect()->route('tasks.index')->with('success', 'Tasks deleted successfully.');
}

}
