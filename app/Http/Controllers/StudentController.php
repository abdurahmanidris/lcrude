<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{    
    public function index()
    {
        //$students = Student::all();
        $students = Student::paginate(3);
        return view('welcome', compact('students'));
        //return 'Hi fro Studentcontroller';
    }
    public function getAllStudent(){
        $students = DB::table('students')->get();
        //$students = Student::all();
        return view('allstudent', compact('students'));
    }
        
    /*public function index($name = null)
    {   
        return 'Hi from Studentcontroller, Name: '.$name;
    }*/
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $student = new Student;
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return redirect(route('allstudent'))->with('successMsg','Student Successfully Added');
    }
    public function edit($id){
        $student = Student::find($id);
        return view('edit',compact('student'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $student = Student::find($id);
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return redirect(route('allstudent'))->with('successMsg','Student Successfully Updated');
    }

    public function delete($id){
        student::find($id)-delete();
        /*$data=student::find($id);
        $data->delete();*/
        //DB::table('students')->where('id', $id)->delete();
        return redirect(route('home'))->with('successMsg','Student Deleted Successfully');
    }
    
}