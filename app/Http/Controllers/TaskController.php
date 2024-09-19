<?php

namespace App\Http\Controllers;

use Illuminate\Http\{Request, Response};
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            'tasks' => Task::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'long_description' => 'required'
        ]);

        $task = new Task;
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->long_description = $data['long_description'];
        $task->save();

        return redirect()->route('tasks.show', [
            'id' => $task->id
        ])->with('success', 'Task has been created succesfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);

        return view('show', [
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit', [
            'task' => Task::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'long_description' => 'required'
        ]);

        $task = Task::find($id);
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->long_description = $data['long_description'];
        $task->save();

        return redirect()->route('tasks.show', [
            'id' => $task->id
        ])->with('success', 'Task has been updated succesfuly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
