<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\CourseDetail;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'name' => 'Algoritma',
                'code' => 'ALG',
                'sks' => 3,
                'status' => 'active',
                'description' => 'Algoritma',
                'user_id' => 1,
            ],
            [
                'name' => 'Pemrograman Web',
                'code' => 'PWB',
                'sks' => 3,
                'status' => 'active',
                'description' => 'Pemrograman Web',
                'user_id' => 1,
            ],
            [
                'name' => 'Pemrograman Mobile',
                'code' => 'PMB',
                'sks' => 3,
                'status' => 'active',
                'description' => 'Pemrograman Mobile',
                'user_id' => 1,
            ],
            [
                'name' => 'Pemrograman Desktop',
                'code' => 'PDM',
                'sks' => 3,
                'status' => 'active',
                'description' => 'Pemrograman Desktop',
                'user_id' => 1,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }

        $courseDetails = [
            [
                'course_id' => 1,
                'lecturer_id' => 1,
                'user_id' => 1,
                'code' => 'ALG1',
                'study_program_id' => 1,
            ],
            [
                'course_id' => 1,
                'lecturer_id' => 2,
                'user_id' => 1,
                'code' => 'ALG2',
                'study_program_id' => 1,
            ],
            [
                'course_id' => 1,
                'lecturer_id' => 3,
                'user_id' => 1,
                'code' => 'ALG3',
                'study_program_id' => 1,
            ],
            [
                'course_id' => 2,
                'lecturer_id' => 4,
                'user_id' => 1,
                'code' => 'PWB1',
                'study_program_id' => 2,
            ],
            [
                'course_id' => 3,
                'lecturer_id' => 5,
                'user_id' => 1,
                'code' => 'PMB1',
                'study_program_id' => 3,
            ],
            [
                'course_id' => 4,
                'lecturer_id' => 6,
                'user_id' => 1,
                'code' => 'PDM1',
                'study_program_id' => 1,
            ],
            [
                'course_id' => 4,
                'lecturer_id' => 7,
                'user_id' => 1,
                'code' => 'PDM2',
                'study_program_id' => 2,
            ],
        ];

        foreach ($courseDetails as $courseDetail) {
            CourseDetail::create($courseDetail);
        }
    }
}
