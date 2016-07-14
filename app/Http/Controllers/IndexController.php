<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class IndexController extends Controller
{
    public function index() {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }
}
