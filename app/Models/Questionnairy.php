<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnairy extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status'];
    public function learningCategoryQuestionnairies()
    {
        return $this->hasMany(LearningCategoryQuestionnairy::class);
    }
}
