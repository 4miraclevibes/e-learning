<?php

namespace App\Http\Controllers;

use App\Models\CourseDetail;
use App\Models\LearningCategory;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index(CourseDetail $courseDetail)
    {
        $modules = $courseDetail->modules;
        return view('pages.backend.courses.details.modules.index', compact('courseDetail', 'modules'));
    }

    public function create(CourseDetail $courseDetail)
    {
        $learningCategories = LearningCategory::all();
        return view('pages.backend.courses.details.modules.create', compact('courseDetail', 'learningCategories'));
    }

    public function store(CourseDetail $courseDetail, Request $request)
    {
        $data = $request->all();
        $data['course_detail_id'] = $courseDetail->id;
        Module::create($data);
        return redirect()->route('courses.details.modules.index', $courseDetail->id)->with('success', 'Module created successfully');
    }

    public function edit(CourseDetail $courseDetail, Module $module)
    {
        return view('pages.backend.courses.details.modules.edit', compact('courseDetail', 'module'));
    }

    public function update(Module $module, Request $request)
    {
        $data = $request->all();
        $module->update($data);
        return redirect()->route('courses.details.modules.index', $module->course_detail_id)->with('success', 'Module updated successfully');
    }

    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('courses.details.modules.index', $module->course_detail_id)->with('success', 'Module deleted successfully');
    }
}
