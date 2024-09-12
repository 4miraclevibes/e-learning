<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lecturers = [
            [
                'user_id' => 7,
                'study_program_id' => 1,
                'nik' => '1234567892',
                'nip' => '1234567892',
                'gender' => 'male',
                'phone' => '081234567892',
                'address' => 'Jl. Raya No. 3',
            ],
            [
                'user_id' => 8,
                'study_program_id' => 2,
                'nik' => '1234567893',
                'nip' => '1234567893',
                'gender' => 'female',
                'phone' => '081234567893',
                'address' => 'Jl. Raya No. 4',
            ],
            [
                'user_id' => 9,
                'study_program_id' => 3,
                'nik' => '1234567894',
                'nip' => '1234567894',
                'gender' => 'male',
                'phone' => '081234567894',
                'address' => 'Jl. Raya No. 5',
            ],
            [
                'user_id' => 10,
                'study_program_id' => 3,
                'nik' => '1234567895',
                'nip' => '1234567895',
                'gender' => 'female',
                'phone' => '081234567895',
                'address' => 'Jl. Raya No. 6',
            ],
            [
                'user_id' => 11,
                'study_program_id' => 1,
                'nik' => '1234567896',
                'nip' => '1234567896',
                'gender' => 'male',
                'phone' => '081234567896',
                'address' => 'Jl. Raya No. 7',
            ],
            [
                'user_id' => 12,
                'study_program_id' => 2,
                'nik' => '1234567897',
                'nip' => '1234567897',
                'gender' => 'female',
                'phone' => '081234567897',
                'address' => 'Jl. Raya No. 8',
            ],
            [
                'user_id' => 13,
                'study_program_id' => 3,
                'nik' => '1234567898',
                'nip' => '1234567898',
                'gender' => 'male',
                'phone' => '081234567898',
                'address' => 'Jl. Raya No. 9',
            ],
            [
                'user_id' => 14,
                'study_program_id' => 3,
                'nik' => '1234567899',
                'nip' => '1234567899',
                'gender' => 'female',
                'phone' => '081234567899',
                'address' => 'Jl. Raya No. 10',
            ],
            [
                'user_id' => 15,
                'study_program_id' => 1,
                'nik' => '1234567890',
                'nip' => '1234567890',
                'gender' => 'male',
                'phone' => '081234567890',
                'address' => 'Jl. Raya No. 11',
            ],
            [
                'user_id' => 16,
                'study_program_id' => 2,
                'nik' => '1234567890',
                'nip' => '1234567890',
                'gender' => 'female',
                'phone' => '081234567890',
                'address' => 'Jl. Raya No. 12',
            ],
        ];
        Lecturer::insert($lecturers);
    }
}
