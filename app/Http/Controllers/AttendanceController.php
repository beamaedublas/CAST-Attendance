<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Event;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function attendance()
    {
        $attendances = Attendance::orderBy('id')->get();
        return view('attendance.index', ['attendances' => $attendances]);
    }

    public function create()
    {
        $events = Event::list(); 
        $students = Student::list(); 
        return view('attendance.create', compact('events', 'students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|numeric',
            'student_id' => 'required|numeric',
            'status' => 'required',
        ]);

        Attendance::create([
            'event_id' => $request->event_id,
            'student_id' => $request->student_id,
            'status' => $request->status,
        ]);

        return redirect('/attendance')->with('info', 'A new attendance has been added');
    }

    public function edit($id)
    {
        $attendance = Attendance::findOrFail($id);
        $events = Event::list();
        $students = Student::list();

        return view('attendance.edit', compact('attendance', 'events', 'students'));
    }

    public function update(Attendance $attendance, Request $request)
    {
        $request->validate([
            'event_id' => 'required|numeric',
            'student_id' => 'required|numeric',
            'status' => 'required',
        ]);

        $attendance->update($request->all());
        return redirect('/attendance')->with('info', $attendance->student->full_name . " has been updated successfully");
    }

    public function delete(Attendance $attendance)
    {
        $attendance->delete();
        return redirect('/attendance')->with('info',$attendance->student->full_name . " has been deleted successfully");
    }
}
