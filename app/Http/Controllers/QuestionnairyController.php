<?php

namespace App\Http\Controllers;

use App\Models\CourseDetail;
use App\Models\Questionnairy;
use App\Models\QuestionnaireResult;
use Illuminate\Http\Request;

class QuestionnairyController extends Controller
{
    public function index()
    {
        $questionnaires = Questionnairy::all();
        return view('pages.backend.questionnaires.index', compact('questionnaires'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive'
        ]);

        Questionnairy::create($request->only(['name', 'description', 'status']));

        return redirect()->back()->with('success', 'Questionnairy created successfully');
    }

    public function update(Questionnairy $questionnairy, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive'
        ]);

        $questionnairy->update($request->only(['name', 'description', 'status']));

        return redirect()->back()->with('success', 'Questionnairy updated successfully');
    }

    public function destroy(Questionnairy $questionnairy)
    {
        $questionnairy->delete();
        return redirect()->route('questionnaires.index', $questionnairy->course_detail_id)->with('success', 'Questionnairy deleted successfully');
    }

    public function result()
    {
        $questionnaireResults = QuestionnaireResult::with([
            'user',
            'student',
            'questionnaireResultDetails.learningCategoryQuestionnairy.learningCategory',
            'learningCategory'
        ])
        ->get();

        $formattedResults = $questionnaireResults->map(function ($questionnaireResult) {
            $categoryResults = $this->getCategoryResults($questionnaireResult);
            $totalQuestions = $questionnaireResult->questionnaireResultDetails->count();
            $mostCommonCategory = $categoryResults->sortByDesc('count')->first();

            return [
                'id' => $questionnaireResult->id,
                'user_name' => $questionnaireResult->user->name,
                'name' => $questionnaireResult->learningCategory->name,
                'category_result' => $categoryResults->map(function ($result) use ($totalQuestions) {
                    $percentage = ($result['count'] / $totalQuestions) * 100;
                    return $result['category_name'] . ': ' . number_format($percentage, 2) . '%';
                })->implode(', '),
                'score' => $mostCommonCategory ? number_format(($mostCommonCategory['count'] / $totalQuestions) * 100, 2) . '%' : 'Tidak ada skor'
            ];
        });

        return view('pages.backend.questionnaires.result', compact('formattedResults'));
    }

    private function getCategoryResults($questionnaireResult)
    {
        return $questionnaireResult->questionnaireResultDetails
            ->groupBy(function ($detail) {
                return $detail->learningCategoryQuestionnairy->learningCategory->id;
            })
            ->map(function ($group) {
                return [
                    'count' => $group->count(),
                    'category_name' => $group->first()->learningCategoryQuestionnairy->learningCategory->name,
                ];
            });
    }

    public function resultJson()
    {
        $questionnaireResults = QuestionnaireResult::with([
            'user',
            'student',
            'questionnaireResultDetails.learningCategoryQuestionnairy.learningCategory'
        ])
        ->get()
        ->map(function ($result) {
            return [
                'id' => $result->id,
                'user_id' => $result->user_id,
                'student_id' => $result->student_id,
                'user' => [
                    'id' => $result->user->id
                ],
                'student' => [
                    'id' => $result->student->id
                ],
                'questionnaire_result_details' => $result->questionnaireResultDetails->map(function ($detail) {
                    return [
                        'id' => $detail->id,
                        'learning_category_questionnairy' => [
                            'id' => $detail->learningCategoryQuestionnairy->id,
                            'learning_category' => [
                                'id' => $detail->learningCategoryQuestionnairy->learningCategory->id
                            ]
                        ]
                    ];
                })
            ];
        });

        return response()->json($questionnaireResults);
    }
}
