<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // View all tasks
    public function index(){
        // The tasks with highest priority value, returned at top of list
        $tasks = Task::orderBy('priority')->get();
        return view('tasks.index', ['tasks'=>$tasks]);
        // alternative: converts above array, into a associative array
        // return view('tasks', compact('tasks'));
    }

    // Create new tasks, from create view
    public function create(){
        return view('tasks.create');
    }

    // Store (create) tasks into db table tasks
    public function store(Request $request){
        $task = new Task();
        $task->name = $request->input('name');
        // takes current count and adds 1, for every new task created
        $task->priority = Task::count() + 1;
        // sets tasks into db
        $task->save();

        return redirect()->route('tasks.index')->with('success', "Task Created!");
    }

    // edit


    // update

    // delete

    // reorder methods
}
