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
    // show data
    public function showdata(){

        $task =  React_task:: all();
        return response()->json(['React_task'=>$task]);
    }
    // update data
    public function update(Request $request ,$uid){
       
        $task =  React_task::find($uid);
        if( $task){
            $task->name = $request['nm'];
            $task->emailid = $request['email'];
            $task->password = $request['pass'];
    
            $task->update();
            return response()->json(['massage'=>'task update ']); 

        }
        else{
            return response()->json(['massage'=>'task not update ']);

        }
    }
        // delete data
         public function delete(Request  $request, $uid){

            $task =  React_task::find($uid);

            if($task){
               $task->delete();
               return response()->json(['massage'=>'task delete successfully ']); 
    
            }
           else{
            return response()->json(['massage'=>'task delete unsuccessfully ']);
            }
        
        }

 

        
    
}
