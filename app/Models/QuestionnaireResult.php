<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_id',
        'learning_category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function questionnaireResultDetails()
    {
        return $this->hasMany(QuestionnaireResultDetail::class, 'result_id');
    }

    public function learningCategory()
    {
        return $this->belongsTo(LearningCategory::class);
    }
}
