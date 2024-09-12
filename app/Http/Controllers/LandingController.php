<?php

namespace App\Http\Controllers;

use App\Models\CourseDetail;
use App\Models\QuestionnaireResult;
use App\Models\QuestionnaireResultDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LandingController extends Controller
{
    public function questionnaire(CourseDetail $courseDetail)
    {
        $questionnaires = $courseDetail->questionnaires;
        return view('pages.frontend.questionnaires.index', compact('questionnaires', 'courseDetail'));
    }
    public function store(CourseDetail $courseDetail, Request $request)
    {
        $questionnaireResult = QuestionnaireResult::create([
            'user_id' => Auth::user()->id,
            'course_detail_id' => $courseDetail->id,
        ]);

        foreach ($request->input('answers') as $questionnaireId => $answerJson) {
            $answer = json_decode($answerJson, true);
            QuestionnaireResultDetail::create([
                'result_id' => $questionnaireResult->id,
                'questionnairy_id' => $answer['questionnaire_id'],
                'category_questionnairy_id' => $answer['category_questionnaire_id'],
            ]);
        }

        return redirect()->route('questionnaire.result', $questionnaireResult->id);
    }

    public function result(QuestionnaireResult $questionnaireResult)
    {
        $questionnaireResult->load('questionnaireResultDetails.questionnairy.learningCategoryQuestionnairies');
        return view('pages.frontend.questionnaires.result', compact('questionnaireResult'));
    }
}
