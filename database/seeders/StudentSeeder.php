<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'user_id' => 2,
                'study_program_id' => 1,
                'nim' => '1234567890',
                'gender' => 'male',
                'phone' => '081234567890',
                'address' => 'Jl. Raya No. 1',
                'nik' => '1234567890',
            ],
            [
                'user_id' => 3,
                'study_program_id' => 2,
                'nim' => '1234567891',
                'gender' => 'female',
                'phone' => '081234567891',
                'address' => 'Jl. Raya No. 2',
                'nik' => '1234567891',
            ],
            [
                'user_id' => 4,
                'study_program_id' => 3,
                'nim' => '1234567892',
                'gender' => 'male',
                'phone' => '081234567892',
                'address' => 'Jl. Raya No. 3',
                'nik' => '1234567892',
            ],
            [
                'user_id' => 5,
                'study_program_id' => 3,
                'nim' => '1234567893',
                'gender' => 'female',
                'phone' => '081234567893',
                'address' => 'Jl. Raya No. 4',
                'nik' => '1234567893',
            ],
            [
                'user_id' => 6,
                'study_program_id' => 3,
                'nim' => '1234567894',
                'gender' => 'male',
                'phone' => '081234567894',
                'address' => 'Jl. Raya No. 5',
                'nik' => '1234567894',
            ],
        ];
        Student::insert($students);
    }
}
