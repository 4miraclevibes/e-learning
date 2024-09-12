<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\StudyProgram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::all();
        return view('pages.backend.lecturers.index', compact('lecturers'));
    }

    public function create()
    {
        $studyPrograms = StudyProgram::all();
        $users = User::where('role', 'LECTURER')->doesntHave('lecturer')->get();
        return view('pages.backend.lecturers.create', compact('studyPrograms', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'study_program_id' => 'required',
            'user_id' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'nik' => 'required',
            'nip' => 'required',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }
        Lecturer::create($data);
        return redirect()->route('lecturers.index')->with('success', 'Lecturer created successfully');
    }

    public function edit(Lecturer $lecturer)
    {
        $studyPrograms = StudyProgram::all();
        return view('pages.backend.lecturers.edit', compact('lecturer', 'studyPrograms'));
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $request->validate([
            'study_program_id' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'nik' => 'required',
            'nip' => 'required',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = $request->all();
        if ($request->hasFile('profile_picture')) {
            Storage::delete($lecturer->profile_picture);
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }
        $lecturer->update($data);
        return redirect()->route('lecturers.index')->with('success', 'Lecturer updated successfully');
    }

    public function destroy(Lecturer $lecturer)
    {
        Storage::delete($lecturer->profile_picture);
        $lecturer->delete();
        return redirect()->route('lecturers.index')->with('success', 'Lecturer deleted successfully');
    }
}
