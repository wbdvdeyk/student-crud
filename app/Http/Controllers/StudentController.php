<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // READ: I-display ang listahan ng students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // CREATE: Ipakita ang form para maglagay ng bagong student
    public function create()
    {
        return view('students.create');
    }

    // CREATE: I-save ang bagong student sa database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'subject' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student created successfully!');
    }

    // UPDATE: Ipakita ang form para i-edit ang student
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // UPDATE: I-save ang mga binago sa database
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'subject' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    // DELETE: Burahin ang student sa database
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}