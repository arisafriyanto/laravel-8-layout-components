<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::orderBy('id', 'desc')->get(),
            'task' => new Task(),
            'submit' => 'Create',
        ]);
    }

    public function store(TaskRequest $request)
    {
        // dd($request->all());
        //* validation
        // $request->validate([
        //     'list' => ['required', 'string', 'min:3'],
        //* return back errors
        // ]);
        // return redirect('tasks');
        // return redirect()->back();

        Task::create($request->all());
        return back();
    }

    public function edit(Task $task)
    {
        //* not model binding
        // $task = Task::where('id', $id)->first();
        // $task = Task::find($id);

        return view('tasks.edit', [
            'task' => $task,
            'submit' => 'Update',
        ]);
    }

    public function update(TaskRequest $request, $id)
    {
        Task::where('id', $id)->update(['list' => $request->list,]);

        return redirect('tasks');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();

        return back();
    }
}
