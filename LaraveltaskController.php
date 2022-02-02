<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\React_task;

class LaraveltaskController extends Controller
{
    public function index(Request $request){
       
        $task = new React_task();

        $task->name = $request['nm'];
        $task->emailid = $request['email'];
        $task->password = $request['pass'];


        $task->save();
        return response()->json($task);

        
    }
}
