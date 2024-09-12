<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningCategoryQuestionnairy extends Model
{
    use HasFactory;
    protected $fillable = ['learning_category_id', 'questionnairy_id', 'status', 'score', 'description'];
    public function learningCategory()
    {
        return $this->belongsTo(LearningCategory::class);
    }
    public function questionnairy()
    {
        return $this->belongsTo(Questionnairy::class);
    }
}
