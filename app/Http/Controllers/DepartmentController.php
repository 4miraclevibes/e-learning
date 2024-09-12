<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('pages.backend.departments.index', compact('departments'));
    }

    public function create()
    {
        $faculties = Faculty::all();
        return view('pages.backend.departments.create', compact('faculties'));
    }   

    public function store(Request $request)
    {
        $request->validate([
            'faculty_id' => 'required|exists:faculties,id',
            'name' => 'required',
            'code' => 'required',
        ]);
        $data = $request->all();
        Department::create($data);
        return redirect()->route('departments.index')->with('success', 'Department created successfully');
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);
        $faculties = Faculty::all();
        return view('pages.backend.departments.edit', compact('department', 'faculties'));
    }   

    public function update(Request $request, $id)
    {
        $request->validate([
            'faculty_id' => 'required|exists:faculties,id',
            'name' => 'required',
            'code' => 'required',
        ]);
        $department = Department::findOrFail($id);
        $data = $request->all();
        $department->update($data);
        return redirect()->route('departments.index')->with('success', 'Department updated successfully');
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Department deleted successfully');
    }
}
