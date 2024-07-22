<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //to display  insert form
    function create(){
        return view('backend.student.create');
    }
    function store (Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'roll_no' => 'required'

    ]);
    Student::create($request->all());


}
function index(){
//        $students = student::all();
//    $students = student::where('passout_key',1);
    $students = Student::orderBy('id','desc')->get();
        return view('backend.student.index',compact('students'));
}
}

