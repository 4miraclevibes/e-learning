<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];
    public function module()
    {
        return $this->hasMany(Module::class);
    }
    public function scheduleStudents()
    {
        return $this->hasMany(ScheduleStudent::class);
    }
    public function exam()
    {
        return $this->hasMany(Exam::class);
    }
}
