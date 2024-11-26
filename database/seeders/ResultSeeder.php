<?php

namespace Database\Seeders;

use App\Models\QuestionnaireResult;
use App\Models\QuestionnaireResultDetail;
use App\Models\Student;
use App\Models\LearningCategoryQuestionnairy;
use App\Models\Questionnairy;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    public function run()
    {
        $students = Student::with('user')->get();
        $questionnaires = Questionnairy::all();

        for ($i = 0; $i < 50; $i++) {
            $randomStudentId = rand(1, 5);
            $student = Student::find($randomStudentId);

            // Buat hasil utama
            $result = QuestionnaireResult::create([
                'student_id' => $student->id,
                'user_id' => $student->user->id,
                'learning_category_id' => 1  // Akan diupdate nanti
            ]);

            // Array untuk menghitung frekuensi kategori
            $categoryFrequency = [];

            // Buat detail hasil untuk setiap kuesioner
            foreach ($questionnaires as $questionnaire) {
                $relatedCategories = $questionnaire->learningCategoryQuestionnairies()
                    ->with('learningCategory')
                    ->get();

                // Pilih kategori secara random
                $selectedCategory = $relatedCategories[array_rand($relatedCategories->toArray())];

                // Tambah frekuensi kategori yang terpilih
                $learningCategoryId = $selectedCategory->learning_category_id;
                $categoryFrequency[$learningCategoryId] = ($categoryFrequency[$learningCategoryId] ?? 0) + 1;

                // Buat detail result
                QuestionnaireResultDetail::create([
                    'result_id' => $result->id,
                    'category_questionnairy_id' => $selectedCategory->id,
                    'questionnairy_id' => $questionnaire->id,
                ]);
            }

            // Tentukan kategori dominan berdasarkan frekuensi tertinggi
            arsort($categoryFrequency);
            $dominantCategoryId = key($categoryFrequency);

            // Update learning_category_id dengan kategori yang paling sering muncul
            $result->update([
                'learning_category_id' => $dominantCategoryId
            ]);
        }
    }
}
