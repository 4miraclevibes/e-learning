<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\QuestionnaireResult;
use App\Models\QuestionnaireResultDetail;

class ResultSeeder extends Seeder
{
    public function run(): void
    {
        $students = Student::all();

        foreach ($students as $student) {
            // Buat QuestionnaireResult
            $result = QuestionnaireResult::create([
                'user_id' => $student->user_id,
                'student_id' => $student->id
            ]);

            // Buat 10 QuestionnaireResultDetail untuk setiap result
            $learningCategoryQuestionnaireIds = [
                ['id' => 2, 'category_id' => 2],  // Auditori
                ['id' => 7, 'category_id' => 2],  // Auditori
                ['id' => 13, 'category_id' => 3], // Teknologi
                ['id' => 16, 'category_id' => 1], // Visual
                ['id' => 21, 'category_id' => 1], // Visual
                ['id' => 26, 'category_id' => 1], // Visual
                ['id' => 31, 'category_id' => 1], // Visual
                ['id' => 36, 'category_id' => 1], // Visual
                ['id' => 41, 'category_id' => 1], // Visual
                ['id' => 46, 'category_id' => 1], // Visual
            ];
            foreach ($learningCategoryQuestionnaireIds as $index => $lcq) {
                QuestionnaireResultDetail::create([
                    'result_id' => $result->id,
                    'category_questionnairy_id' => $lcq['id'],
                    'questionnairy_id' => $index + 1  // menggunakan index looping + 1 (agar mulai dari 1 bukan 0)
                ]);
            }
        }
    }
}
