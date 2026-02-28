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

Route::get("/editStudent/{id}",[StudentController::class,"showEditPage"]);

Route::put("/editStudent/{id}",[StudentController::class,"putEditStudent"]);
