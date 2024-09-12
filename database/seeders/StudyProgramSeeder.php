<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studyPrograms = [
            [
                'name' => 'Computer Science',
                'code' => 'CS',
                'department_id' => 1,
            ],
            [
                'name' => 'Electrical Engineering',
                'code' => 'EE',
                'department_id' => 2,
            ],
            [
                'name' => 'Business Administration',
                'code' => 'BA',
                'department_id' => 3,
            ],
        ];
        StudyProgram::insert($studyPrograms);
    }
}
