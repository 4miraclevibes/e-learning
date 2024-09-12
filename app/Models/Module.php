<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = ['course_detail_id', 'learning_category_id', 'pertemuan', 'name', 'description'];
    public function courseDetail()
    {
        return $this->belongsTo(CourseDetail::class);
    }
    public function learningCategory()
    {
        return $this->belongsTo(LearningCategory::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
