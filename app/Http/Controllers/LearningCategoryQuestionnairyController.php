<?php

namespace App\Http\Controllers;

use App\Models\LearningCategory;
use App\Models\LearningCategoryQuestionnairy;
use App\Models\Questionnairy;
use Illuminate\Http\Request;

class LearningCategoryQuestionnairyController extends Controller
{
    public function index(Questionnairy $questionnairy)
    {
        return view('pages.backend.courses.details.questionnaires.category.index', compact('questionnairy'));
    }
    public function create(Questionnairy $questionnairy)
    {
        $learningCategories = LearningCategory::all();
        return view('pages.backend.courses.details.questionnaires.category.create', compact('questionnairy', 'learningCategories'));
    }
    public function store(Questionnairy $questionnairy, Request $request)
    {
        $request->validate([
            'description' => 'required',
            'learning_category_id' => 'required|exists:learning_categories,id',
        ]);
        $data = $request->only(['description', 'learning_category_id']);
        $data['questionnairy_id'] = $questionnairy->id;
        LearningCategoryQuestionnairy::create($data);
        return redirect()->route('courses.details.questionnaires.category.index', $questionnairy->id)->with('success', 'Jawaban berhasil ditambahkan');
    }
    public function edit(LearningCategoryQuestionnairy $learningCategoryQuestionnairy)
    {
        $learningCategories = LearningCategory::all();
        return view('pages.backend.courses.details.questionnaires.category.edit', compact('learningCategoryQuestionnairy', 'learningCategories'));
    }
    public function update(LearningCategoryQuestionnairy $learningCategoryQuestionnairy, Request $request)
    {
        $request->validate([
            'description' => 'required',
            'learning_category_id' => 'required|exists:learning_categories,id',
        ]);
        $data = $request->only(['description', 'learning_category_id']);
        $learningCategoryQuestionnairy->update($data);
        return redirect()->route('courses.details.questionnaires.category.index', $learningCategoryQuestionnairy->questionnairy->id)->with('success', 'Jawaban berhasil diubah');
    }
    public function destroy(LearningCategoryQuestionnairy $learningCategoryQuestionnairy)
    {
        $learningCategoryQuestionnairy->delete();
        return redirect()->route('courses.details.questionnaires.category.index', $learningCategoryQuestionnairy->questionnairy->id)->with('success', 'Jawaban berhasil dihapus');
    }
}
