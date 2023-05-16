<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaskController extends Controller
{
    // ********************************************************************
    use HasFactory;


    // ********************************************************************
    // Retrieve all tasks (index):
    // Route: GET /tasks
    // Controller method: index
    // View: tasks.index
    public function index()
    {
        //currently logged account
        $user = auth()->user();
        $id = $user->id;

        $user = User::find($id);

        $tasks = $user->tasks;

        return view('task/index', ['tasks' => $tasks]);
    }

    // ********************************************************************
    // Create a new task (create):
    // Route: GET /tasks/create
    // Controller method: create
    // View: tasks.create
    public function create()
    {
        return view('task/create');
    }

    // ********************************************************************
    // Store the new task (store):
    // Route: POST /tasks
    // Controller method: store
    // Redirect route: GET /tasks/{id} (show task details)
    public function store(Request $request)
    {
        //currently logged account
        $user = auth()->user();
        $id = $user->id;

        $user = User::find($id);

        $user->tasks()->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            // Assign other attributes as needed
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    // ********************************************************************
    // Retrieve a specific task (show):
    // Route: GET /tasks/{id}
    // Controller method: show
    // View: tasks.show
    public function show($id)
    {
        $task = Tasks::findOrFail($id);

        return view('task/show', ['task' => $task]);
    }

    // ********************************************************************
    // Edit an existing task (edit):
    // Route: GET /tasks/{id}/edit
    // Controller method: edit
    // View: tasks.edit
    public function edit($id)
    {
        $task = Tasks::findOrFail($id);
        return view('task/edit', compact('task'));
    }

    // ********************************************************************
    // Update an existing task (update):
    // Route: PUT /tasks/{id}
    // Controller method: update
    // Redirect route: GET /tasks/{id} (show task details)
    public function update(Request $request, $id)
    {
        $task = Tasks::findOrFail($id);
        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    // ********************************************************************
    // Delete an existing task (destroy):
    // Route: DELETE /tasks/{id}
    // Controller method: destroy
    // Redirect route: GET /tasks (list of tasks)
    public function destroy($id)
    {
        $task = Tasks::findOrFail($id);
        $task->delete();

        return redirect()->back()->with('success', 'Task deleted successfully.');
    }
}
