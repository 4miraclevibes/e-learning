<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnairy extends Model
{
    use HasFactory;
    protected $fillable = ['course_detail_id', 'name', 'description', 'status'];
    public function courseDetail()
    {
        return $this->belongsTo(CourseDetail::class);
    }
    public function learningCategoryQuestionnairies()
    {
        return $this->hasMany(LearningCategoryQuestionnairy::class);
    }
}
