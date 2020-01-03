<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Task;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $tasks = $request->user()->tasks()->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request) {
        $request->user()->tasks()->create([
            'title' => $request->title,
            'deadline' => $request->deadline,
        ]);
        return redirect('/tasks');
        // return response()->json(['success'=>$input['title'] . ' | ' . $input['deadline']]);
        // return $request;
    }

    public function current(Request $request) {
        $tasks = App\Task::incomplete();
        return view('tasks.current', compact('tasks'));
    }

    public function completed(Request $request) {
        $tasks = App\Task::complete();
        return view('tasks.completed', compact('tasks'));
    }
}
