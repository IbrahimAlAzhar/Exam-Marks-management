<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function index(){
    return view('welcome');
  }
  public function log(){
    return view('log');
  }
  public function studentslogin(){
    return view('students_login');
  }
  public function studentsregister(){
    return view('students_register');
  }
  public function login(){
    return view('login');
  }
  public function data(){
        $students = Student::all();
  return view('data')->with('students',$students);
}

  public function store( Request $request)
  {
    $student = new Student;
    $student->id = $request->id;
    $student->Student_name = $request->Student_name;
    $student->Subject_code=$request->Subject_code;
    $student->first_tt_marks=$request->first_tt_marks;
    $student->second_tt_marks=$request->second_tt_marks;
    $student->first_part_marks=$request->first_part_marks;
    $student->second_part_marks=$request->second_part_marks;
    $student->attendence_marks=$request->attendence_marks;
    $student->Comments = $request->Comments;
    $student->save();
   return redirect()->route('data');
    //insert data into student table
  }
}
