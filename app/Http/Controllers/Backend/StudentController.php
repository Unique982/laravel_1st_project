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
    if(student::create($request->all())) {
        $request->session()->flash('success', 'Student Added Successfully');
    }else{
        $request->session()->flash('error','Student creation failed');
        }

return redirect()->route('backend.student.index');

}
function index(){
//        $students = student::all();
//    $students = student::where('passout_key',1);
    $students = Student::orderBy('id','desc')->get();
        return view('backend.student.index',compact('students'));
}
// view
function show($id){
        $student = Student::findOrFail($id);
        return view('backend.student.show',compact('student'));
}
// delete
    function  destroy($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('backend.student.index');
    }
}


