<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'lecturer_id', 'user_id', 'code', 'study_program_id'];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function questionnaires()
    {
        return $this->hasMany(Questionnairy::class);
    }
    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }
    public function questionnaireResults()
    {
        return $this->hasMany(QuestionnaireResult::class);
    }
}
