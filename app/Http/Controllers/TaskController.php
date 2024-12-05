<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function store(StoreTaskRequest $req){

   $data= Task::create($req->validated());
    return response()->json($data,200);
   }
   public function index(){
    $data=Task::all();
    return response()->json($data,200);
   }
   public function apdate($id,UpdateTaskRequest $req){
    $data=Task::find($id);
    $data->update($req->validated());
    return response()->json($data,200);
   }
   public function show($id){
    $data=Task::find($id);
    return response()->json($data,200);
   }
   public function delete($id){
    Task::find($id)->delete();
    return response()->json(['message'=>'yes'],204);
   }
   public function get_task($id){
    $data=Task::find($id)->user;
    return response()->json($data);
   }

}
