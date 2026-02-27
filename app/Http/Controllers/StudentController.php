<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    function index(){
        $students = Student::all();
        return view("Student",compact("students"));
    }

    function showAddStudent () {
       return view("AddStudent");
    }

    function postStudent(Request $req){
        // Validate
        $req->validate([
            "name" => "required | string | max:255",
            "reg" => "required",
            "email" => "required | string",
            "password" => "required",
        ]);

        $student = new Student();

        $student->name = $req->name;
        $student->reg = $req->reg;
        $student->email = $req->email;
        $student->password = $req->password;

        $student->save();

        return redirect("/addStudent")->with("success","Student add success");
    }


    function deleteStudent($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->back()->with("success","Student delete success");
    }

    function showUpdateStudent($id){
        $student = Student::findOrFail($id);
        return view("UpdateStudent",compact("student"));
    }

    function putupdateStudent(Request $req, $id){
        // Validate
        $req->validate([
            "name" => "required | string | max:255",
            "reg" => "required",
            "email" => "required | string",
            "password" => "required",
        ]);

        $student = Student::findOrFail($id);

        $student->name = $req->name;
        $student->reg = $req->reg;
        $student->email = $req->email;
        $student->password = $req->password;

        $student->save();

        return redirect("/student")->with("success","Student update success");
    }

}
