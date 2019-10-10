<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TasksController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function current() {
        $tasks = App\Task::incomplete();
        return view('current', compact('tasks'));
    }

    public function completed() {
        $tasks = App\Task::complete();
        return view('completed', compact('tasks'));
    }
}
