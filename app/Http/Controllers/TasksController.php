<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function addTask(Request $request)
    {
        $data = $request->only('task', 'body');

        $task = Todo::create([
            "task" => $data["task"],
            "body" => $data["body"]
        ]);
        if ($task) {
            return redirect()->back();
        }
    }

    public function doTask(Request $request)
    {
        $task = Todo::find($request->id);

         if (!$task) {
             return abort(404);
         }

        $task->delete();
        return redirect()->back();
    }
    public function updatePage(Request $request)
    {
        $data = $request->only('task', 'body', 'id');

        $task = Todo::find($data['id']);

        if(!$task){
            abort(404);
        }
        $task->task = $data["task"];
        $task->body = $data["body"];
        $task->save();
        return redirect()->to('/');
    }
}
