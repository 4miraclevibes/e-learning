<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScheduleStudent;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class ScheduleStudentController extends Controller
{
    public function index()
    {
        $scheduleStudents = ScheduleStudent::where('student_id', Auth::user()->student->id)->get();
        return view('pages.backend.students.schedules.index', compact('scheduleStudents'));
    }

    public function store(Schedule $schedule)
    {
        $data['student_id'] = Auth::user()->student->id;
        $data['schedule_id'] = $schedule->id;
        ScheduleStudent::create($data);
        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully');
    }

    public function destroy(ScheduleStudent $scheduleStudent)
    {
        $scheduleStudent->delete();
        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully');
    }
}
