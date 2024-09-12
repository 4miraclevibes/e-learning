<?php

namespace App\Http\Controllers;

use App\Models\CourseDetail;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('pages.backend.schedules.index', compact('schedules'));
    }

    public function create()
    {
        $courseDetails = CourseDetail::all();
        return view('pages.backend.schedules.create', compact('courseDetails'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_detail_id' => 'nullable',
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
        ]);
        $data = $request->only('course_detail_id', 'start_time', 'end_time', 'date');
        Schedule::create($data);
        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully');
    }

    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        $courseDetails = CourseDetail::all();
        return view('pages.backend.schedules.edit', compact('schedule', 'courseDetails'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_detail_id' => 'nullable',
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
        ]);
        $schedule = Schedule::findOrFail($id);
        $schedule->update($request->all());
        return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully');
    }

    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully');
    }
}
