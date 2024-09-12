<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireResultDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'questionnaire_result_id',
        'learning_category_questionnairy_id',
        'questionnairy_id'
    ];
    public function questionnaireResult()
    {
        return $this->belongsTo(QuestionnaireResult::class);
    }
    public function learningCategoryQuestionnairy()
    {
        return $this->belongsTo(LearningCategoryQuestionnairy::class);
    }
    public function questionnairy()
    {
        return $this->belongsTo(Questionnairy::class);
    }
}
