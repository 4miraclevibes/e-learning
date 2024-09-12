<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nip', 'study_program_id', 'gender', 'phone', 'address', 'nik', 'profile_picture'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }
    public function courseDetails()
    {
        return $this->hasMany(CourseDetail::class);
    }
}
