<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nim', 'study_program_id', 'gender', 'phone', 'address', 'nik', 'profile_picture', 'learning_category_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }
    public function learningCategory()
    {
        return $this->belongsTo(LearningCategory::class);
    }
    public function scheduleStudents()
    {
        return $this->hasMany(ScheduleStudent::class);
    }
}
