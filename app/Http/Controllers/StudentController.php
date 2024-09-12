<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudyProgram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('pages.backend.students.index', compact('students'));
    }

    public function create()
    {
        $studyPrograms = StudyProgram::all();
        $users = User::where('role', 'STUDENT')->doesntHave('student')->get();
        return view('pages.backend.students.create', compact('studyPrograms', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'study_program_id' => 'required',
            'user_id' => 'required|exists:users,id',
            'nim' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }
        Student::create($data);
        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    public function edit(Student $student)
    {
        $studyPrograms = StudyProgram::all();
        return view('pages.backend.students.edit', compact('student', 'studyPrograms'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'study_program_id' => 'required',
            'nim' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = $request->all();
        if ($request->hasFile('profile_picture')) {
            Storage::delete($student->profile_picture);
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }
        $student->update($data);
        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        Storage::delete($student->profile_picture);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
