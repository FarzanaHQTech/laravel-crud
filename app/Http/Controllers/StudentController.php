<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   

    public function index()
    {
        //$students= Student::get();
        $students= Student::all();
        //  print_r($students);

        return view('students.index' , compact('students'));
    }

   
    public function create()
    {
        return view('students.create');
    }

  
    public function store(Request $request)
    {
        
        $request->validate([
            'name'=>'required|min:3',
            'roll'=>"required|min:4|numeric",
            'phone'=>"required|min:4|numeric",
            // 'address' => "required|in:dhaka,rajshahi",
            'address'=>"required|min:5",
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ],[
            'address.in'=>"Address must be inbetween Dhaka or Rajshahi",
        ]);
        
         
        $sutdent= new Student();
        $sutdent->name= $request->name;
        $sutdent->roll= $request->roll;
        $sutdent->phone= $request->phone;
        $sutdent->address= $request->address;
        $photoname=$request->name.".".$request->file('photo')->extension();
        $request->file('photo')->move(public_path('photo'), $photoname);

        $sutdent->photo= $photoname;

        if($sutdent->save()){
            return redirect('student')->with('success', "Student has been registred");
         } ;
        
    
    }

  
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show',compact('student'));
    }

   
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.update',compact('student'));
    }

   
    public function update(Request $request)
    {
      $request->validate([
        'name'=>'required|min:3',
        'roll'=>'required|min:4|numeric',
        'phone'=>'required|min:10|numeric',
        'address'=>'required|min:5',
        'photo'=>'required|image|mimes:jpg,jpeg,png|max:2024',
      ]); 

      $student = Student::find($request->id) ;
      $student->name = $request->name;
      $student->roll = $request->roll;
      $student->phone = $request->phone;
      $student->address = $request->address;
      $photoname = $request->name.".".$request->file('photo')->extension();
      $student->photo= $photoname;

    //   for update method save

    if($student->save()){
        return redirect('student')->with('success','student updated successfully');
    }

    }

   
    public function destroy_view($id)
    {
        $student = Student::find($id);
        return view('students.delete',compact('student'));
    }
    public function destroy(Request $request)
    {
       $delete = Student::destroy($request->id);
       if($delete){
        return redirect('student')->with('success',"student has been deleted successfully");

        

       }
    }

    public function search(Request $request){
        $students= Student::where('name',"like", "%{$request->name}%")->get();

        $request_data = $request->name;

        // return view('students.index',compact('students','request_data'));

        if($students){
            return view('students.index',compact('students'));
        }else{
            $students=[];
        }
    }
}
