<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return redirect()->route('students.create');
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|unique:students,student_id',
            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email',
            'mobile_number' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'program' => 'required',
            'year_level' => 'required',
            'address' => 'required',
            'profile_picture' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('profile_picture')) {
            $validated['profile_picture'] = $request
                ->file('profile_picture')
                ->store('profile-pictures', 'public');
        }

        $student = Student::create($validated);

        return redirect()
            ->route('students.show', $student->id)
            ->with('success', 'Student registered successfully!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}