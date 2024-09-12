<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireResultDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'result_id',
        'category_questionnairy_id',
        'questionnairy_id'
    ];
    public function questionnaireResult()
    {
        return $this->belongsTo(QuestionnaireResult::class, 'result_id');
    }
    public function learningCategoryQuestionnairy()
    {
        return $this->belongsTo(LearningCategoryQuestionnairy::class, 'category_questionnairy_id');
    }
    public function questionnairy()
    {
        return $this->belongsTo(Questionnairy::class, 'questionnairy_id');
    }
}
