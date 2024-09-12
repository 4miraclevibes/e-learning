<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class StudyProgramController extends Controller
{
    public function index()
    {
        $studyPrograms = StudyProgram::all();
        return view('pages.backend.study_programs.index', compact('studyPrograms'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('pages.backend.study_programs.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'department_id' => 'required|exists:departments,id',
        ]);
        $data = $request->all();
        StudyProgram::create($data);
        return redirect()->route('study_programs.index')->with('success', 'Study program created successfully');
    }

    public function edit(StudyProgram $studyProgram)
    {
        $departments = Department::all();
        return view('pages.backend.study_programs.edit', compact('studyProgram', 'departments'));
    }

    public function update(Request $request, StudyProgram $studyProgram)
    {
        $request->validate([
            'name' => 'required',
            'department_id' => 'required|exists:departments,id',
        ]);
        $data = $request->all();
        $studyProgram->update($data);
        return redirect()->route('study_programs.index')->with('success', 'Study program updated successfully');
    }

    public function destroy(StudyProgram $studyProgram)
    {
        $studyProgram->delete();
        return redirect()->route('study_programs.index')->with('success', 'Study program deleted successfully');
    }
}
