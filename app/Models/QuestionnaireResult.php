<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_detail_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courseDetail()
    {
        return $this->belongsTo(CourseDetail::class);
    }

    public function questionnaireResultDetails()
    {
        return $this->hasMany(QuestionnaireResultDetail::class, 'result_id');
    }
}
