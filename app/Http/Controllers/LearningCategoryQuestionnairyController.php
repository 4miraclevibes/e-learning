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
        $learningCategories = LearningCategory::all();
        return view('pages.backend.questionnaires.category.index',
            compact('questionnairy', 'learningCategories'));
    }

    public function store(Questionnairy $questionnairy, Request $request)
    {
        $validated = $request->validate([
            'description' => 'required',
            'learning_category_id' => 'required|exists:learning_categories,id',
        ]);

        $data = $validated;
        $data['questionnairy_id'] = $questionnairy->id;

        LearningCategoryQuestionnairy::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Jawaban berhasil ditambahkan'
        ]);
    }

    public function update(LearningCategoryQuestionnairy $learningCategoryQuestionnairy, Request $request)
    {
        $validated = $request->validate([
            'description' => 'required',
            'learning_category_id' => 'required|exists:learning_categories,id',
        ]);

        $learningCategoryQuestionnairy->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Jawaban berhasil diubah'
        ]);
    }

    public function destroy(LearningCategoryQuestionnairy $learningCategoryQuestionnairy)
    {
        $learningCategoryQuestionnairy->delete();

        return response()->json([
            'success' => true,
            'message' => 'Jawaban berhasil dihapus'
        ]);
    }
}
