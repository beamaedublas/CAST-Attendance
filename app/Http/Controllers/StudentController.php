<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        $students = Student::orderBy('id')->get();
        return view('student.index', ['students' => $students]);
    }

    public function create()
    {
        $events = Event::list(); 
        return view('student.create', compact('events'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|numeric',
            'full_name' => 'required',
            'year_level' => 'required',
            'address' => 'required',
        ]);

        Student::create([
            'event_id' => $request->event_id,
            'full_name' => $request->full_name,
            'year_level' => $request->year_level,
            'address' => $request->address,
        ]);

        return redirect('/student')->with('info', 'A new student has been added');
    }

    public function edit($id){
        $events = Event::list();
        $student = Student::findOrFail($id);
        return view('student.edit', compact('events', 'student'));
    }
    

    public function update(Student $student, Request $request)
    {
        $request->validate([
            'event_id' => 'required|numeric',
            'full_name' => 'required',
            'year_level' => 'required',
            'address' => 'required',
        ]);

        $student->update($request->all());
        return redirect('/student')->with('info', "$student->full_name has been updated successfully");
    }

    public function delete(Student $student)
    {
        $student->delete();
        return redirect('/student')->with('info', "$student->full_name has been deleted successfully");
    }
}
