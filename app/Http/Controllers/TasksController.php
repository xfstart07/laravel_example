<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class TasksController extends Controller
{
    public function store(Request $request) {
        $name = $request->input('name');
        if (!empty($name)) {
            Task::create(['title' => $name]);
        }
        return redirect('/');
    }

    public function destroy($id) {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/');
    }
}
