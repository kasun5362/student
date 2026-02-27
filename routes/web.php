<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/addStudent', [StudentController::class,"showAddStudent"]);
Route::post("/postStudent", [StudentController::class,"postStudent"]);
Route::get("/student",[StudentController::class,"index"]);

