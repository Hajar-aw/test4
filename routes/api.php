<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('tesk/store',[TaskController::class,'store']);
Route::get('tesk',[TaskController::class,'index']);
Route::put('tesk/apdate/{id}',[TaskController::class,'apdate']);
Route::get('tesk/find/{id}',[TaskController::class,'show']);
Route::delete('tesk/delete/{id}',[TaskController::class,'delete']);
Route::post('profile',[ProfileController::class,'store']);
Route::get('pr/{id}',[UserController::class,'getprofile']);
Route::put('pr/{id}',[UserController::class,'update']);
Route::post('prr/{id}',[TaskController::class,'get_task']);
