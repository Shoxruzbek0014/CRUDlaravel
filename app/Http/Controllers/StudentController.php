<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $contact = Student::get();
        return view('student.index',compact(['contact']));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $student = new Student();

        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->cource = $request->input('cource');
        if($request->hasFile('profile_image'))
        {
            $file = $request->file('profile_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/student/', $filename);
            $student->profile_image = $filename;
        }
        $student->save();
        return redirect('student')->with('status','Malumot muvaffaqqiyatli yuklandi !');
        
    }

    public function show($id)
    {
        $show = Student::find($id);

        return view('student.show', compact(['show']));
    }

    public function edit($id)
    {
        $edit = Student::find($id);
        return view('student.edit', compact(['edit']));
    }

    public function student_update(Request $request, $id)
    {
        dd($id);
    }
}