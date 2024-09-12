<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    use HasFactory;
    protected $fillable = ['department_id', 'name', 'code'];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function lecturers()
    {
        return $this->hasMany(Lecturer::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
