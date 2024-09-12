<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('pages.backend.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('pages.backend.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'sks' => 'required',
            'status' => 'required',
            'description' => 'nullable',
        ]);
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        Course::create($data);
        return redirect()->route('courses.index')->with('success', 'Mata Kuliah berhasil dibuat');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('pages.backend.courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'sks' => 'required',
            'status' => 'required',
            'description' => 'nullable',
        ]);
        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Mata Kuliah berhasil diupdate');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
