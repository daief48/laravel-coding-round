<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'is_completed' => 'boolean',
        ]);
        $validated['is_completed'] = $validated['is_completed'] ?? false;
        $task = Task::create($validated);
        return response()->json($task, 201);
    }

    public function markCompleted(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $validated = $request->validate([
            'is_completed' => 'required|boolean',
        ]);
        $task->is_completed = $validated['is_completed'];
        $task->save();
        return response()->json($task);
    }

    public function pending()
    {
        $tasks = Task::where('is_completed', false)->get();
        return response()->json($tasks);
    }
}
