<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function mainPage(){
        $todos = Todo::all();


        return view('main', [
            "todos" => $todos
        ]);
    }
    public function taskPage($id){
        $task = Todo::find($id);

        if(!$task){
            return abort(404);
        }

        return view('task', [
            "task" => $task
        ]);
    }
    public function updatePage($id){
        $task = Todo::find($id);
        if(!$task){
            return abort(404);
        }
        return view('update', [
            "task" => $task
        ]);
    }
}
