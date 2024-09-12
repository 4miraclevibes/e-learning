<?php

namespace App\Http\Controllers;

use App\Models\LearningCategory;
use Illuminate\Http\Request;

class LearningCategoryController extends Controller
{
    public function index()
    {
        $learningCategories = LearningCategory::all();
        return view('pages.backend.learning_categories.index', compact('learningCategories'));
    }
    public function create()
    {
        return view('pages.backend.learning_categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        $data = $request->all();
        LearningCategory::create($data);
        return redirect()->route('learning_categories.index')->with('success', 'Learning Category created successfully');
    }
    public function edit(LearningCategory $learningCategory)
    {
        return view('pages.backend.learning_categories.edit', compact('learningCategory'));
    }
    public function update(Request $request, LearningCategory $learningCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        $data = $request->all();
        $learningCategory->update($data);
        return redirect()->route('learning_categories.index')->with('success', 'Learning Category updated successfully');
    }
    public function destroy(LearningCategory $learningCategory)
    {
        $learningCategory->delete();
        return redirect()->route('learning_categories.index')->with('success', 'Learning Category deleted successfully');
    }
}
