<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();
        return view('pages.backend.faculties.index', compact('faculties'));
    }

    public function create()
    {
        return view('pages.backend.faculties.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);
        $data = $request->all();
        Faculty::create($data);
        return redirect()->route('faculties.index')->with('success', 'Faculty created successfully');
    }

    public function edit(Faculty $faculty)
    {
        return view('pages.backend.faculties.edit', compact('faculty'));
    }

    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);
        $data = $request->all();
        $faculty->update($data);
        return redirect()->route('faculties.index')->with('success', 'Faculty updated successfully');
    }

    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->route('faculties.index')->with('success', 'Faculty deleted successfully');
    }
}
