<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(Request $request)
    {
        Task::create(['list' => $request->list]);

        // return redirect('tasks');
        // return redirect()->back();
        return back();
    }

    public function edit($id)
    {
        // $task = Task::where('id', $id)->first();
        $task = Task::find($id);

        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
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
