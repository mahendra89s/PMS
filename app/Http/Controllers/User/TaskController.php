<?php

namespace App\Http\Controllers\User;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function add($id)
    {
        return view('User.task-add',compact('id'));
    }
    public function save(Request $request,$pid)
    {
        $request->validate([
            'task_title' => 'required|string',
            'task_desc' => 'required|string',
            'date_time' => 'date|nullable'
        ]);
        $uid = Auth::user()->id; 
        
        $task = Task::create([
            'title' => $request->task_title,
            'Task_description' => $request->task_desc,
            'start_date' => $request->date_time,
            'status' => 0,
            'user_id' => $uid ,
            'project_id' => $pid,
        ]);
        toastr()->success('Task Added Successfully');
        return redirect()->back();

    }
}
