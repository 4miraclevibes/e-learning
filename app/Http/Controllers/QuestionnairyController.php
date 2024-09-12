<?php

namespace App\Http\Controllers;

use App\Models\CourseDetail;
use App\Models\LearningCategory;
use App\Models\Questionnairy;
use Illuminate\Http\Request;

class QuestionnairyController extends Controller
{
    public function index(CourseDetail $courseDetail)
    {
        // dd($courseDetail);
        return view('pages.backend.courses.details.questionnaires.index', compact('courseDetail'));
    }

    public function create(CourseDetail $courseDetail)
    {
        $learningCategories = LearningCategory::all();
        return view('pages.backend.courses.details.questionnaires.create', compact('courseDetail', 'learningCategories'));
    }

    public function store(CourseDetail $courseDetail, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $data = $request->only('name', 'description');
        $data['course_detail_id'] = $courseDetail->id;
        Questionnairy::create($data);
        return redirect()->route('courses.details.questionnaires.index', $courseDetail->id)->with('success', 'Questionnairy created successfully');
    }

    public function edit(Questionnairy $questionnairy)
    {
        return view('pages.backend.courses.details.questionnaires.edit', compact('questionnairy'));
    }

    public function update(Questionnairy $questionnairy, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $data = $request->only('name', 'description');
        $questionnairy->update($data);
        return redirect()->route('courses.details.questionnaires.index', $questionnairy->course_detail_id)->with('success', 'Questionnairy updated successfully');
    }

    public function destroy(Questionnairy $questionnairy)
    {
        $questionnairy->delete();
        return redirect()->route('courses.details.questionnaires.index', $questionnairy->course_detail_id)->with('success', 'Questionnairy deleted successfully');
    }
}
