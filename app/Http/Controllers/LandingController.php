<?php

namespace App\Http\Controllers;

use App\Models\CourseDetail;
use App\Models\QuestionnaireResult;
use App\Models\QuestionnaireResultDetail;
use App\Models\Questionnairy;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LandingController extends Controller
{
    public function questionnaire()
    {
        $questionnaires = Questionnairy::all();
        return view('pages.frontend.questionnaires.index', compact('questionnaires'));
    }
    public function store(Request $request)
    {
        $questionnaireResult = QuestionnaireResult::create([
            'user_id' => Auth::user()->id,
            'student_id' => Auth::user()->student->id ?? 1,
            'learning_category_id' => 1
        ]);

        $categoryFrequency = [];

        foreach ($request->input('answers') as $questionnaireId => $answerJson) {
            $answer = json_decode($answerJson, true);

            $categoryId = $answer['category_questionnaire_id'];
            $categoryFrequency[$categoryId] = ($categoryFrequency[$categoryId] ?? 0) + 1;

            QuestionnaireResultDetail::create([
                'result_id' => $questionnaireResult->id,
                'questionnairy_id' => $answer['questionnaire_id'],
                'category_questionnairy_id' => $answer['category_questionnaire_id'],
            ]);
        }

        arsort($categoryFrequency);
        $dominantCategoryId = key($categoryFrequency);

        $questionnaireResult->update([
            'learning_category_id' => $dominantCategoryId
        ]);

        $student = Student::where('user_id', Auth::user()->id)->first();
        $student->update([
            'learning_category_id' => $dominantCategoryId
        ]);

        return redirect()->route('landing.questionnaire.result', $questionnaireResult->id);
    }

    public function result(QuestionnaireResult $questionnaireResult)
    {
        $questionnaireResult->load('questionnaireResultDetails.questionnairy.learningCategoryQuestionnairies');
        return view('pages.frontend.questionnaires.result', compact('questionnaireResult'));
    }
}
