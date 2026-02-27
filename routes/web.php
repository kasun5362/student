<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/addStudent', [StudentController::class,"showAddStudent"]);
Route::post("/postStudent", [StudentController::class,"postStudent"]);
Route::get("/student",[StudentController::class,"index"]);
Route::delete("/deleteStudent/{id}",[StudentController::class,"deleteStudent"]);

Route::get("/updateStudent/{id}",[StudentController::class,"showUpdateStudent"]);

Route::put("/putUpdateStudent/{id}",[StudentController::class,"putupdateStudent"]);

