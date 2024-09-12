<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleStudent extends Model
{
    use HasFactory;
    protected $fillable = ['schedule_id', 'student_id', 'learning_category_id'];
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function learningCategory()
    {
        return $this->belongsTo(LearningCategory::class);
    }
}
