<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = ['course_detail_id', 'learning_category_id', 'name', 'description'];
    public function courseDetail()
    {
        return $this->belongsTo(CourseDetail::class);
    }
    public function learningCategory()
    {
        return $this->belongsTo(LearningCategory::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
