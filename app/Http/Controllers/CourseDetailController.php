<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Lecturer;
use App\Models\QuestionnaireResult;
use App\Models\StudyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CourseDetailController extends Controller
{
    public function index(Course $course)
    {
        return view('pages.backend.courses.details.index', compact('course'));
    }
    public function create(Course $course)
    {
        $lecturers = Lecturer::all();
        $studyPrograms = StudyProgram::all();
        return view('pages.backend.courses.details.create', compact('course', 'studyPrograms', 'lecturers'));
    }

    public function store(Course $course, Request $request)
    {
        $request->validate([
            'study_program_id' => 'required|exists:study_programs,id',
            'lecturer_id' => 'nullable|exists:lecturers,id',
            'code' => 'required|string|max:255',
        ]);
        $data = $request->only(['study_program_id', 'lecturer_id', 'code']);
        $data['course_id'] = $course->id;
        $data['user_id'] = Auth::user()->id;
        CourseDetail::create($data);

        return redirect()->route('courses.details.index', $course->id)->with('success', 'Detail Mata Kuliah berhasil ditambahkan');
    }

    public function edit(CourseDetail $courseDetail)
    {
        $lecturers = Lecturer::all();
        $studyPrograms = StudyProgram::all();
        return view('pages.backend.courses.details.edit', compact('courseDetail', 'studyPrograms', 'lecturers'));
    }

    public function update(CourseDetail $courseDetail, Request $request)
    {
        $request->validate([
            'study_program_id' => 'required|exists:study_programs,id',
            'lecturer_id' => 'required|exists:lecturers,id',
            'code' => 'required|string|max:255',
        ]);
        $data = $request->only(['study_program_id', 'lecturer_id', 'code']);
        $data['user_id'] = Auth::user()->id;
        $courseDetail->update($data);

        return redirect()->route('courses.details.index', $courseDetail->course_id)->with('success', 'Detail Mata Kuliah berhasil diubah');
    }

    public function destroy(CourseDetail $courseDetail)
    {
        $courseDetail->delete();
        return redirect()->route('courses.details.index', $courseDetail->course_id)->with('success', 'Detail Mata Kuliah berhasil dihapus');
    }
}
