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
        // Ambil semua user dengan role_id = 2
        $users = \App\Models\User::where('role_id', 2)->get();

        foreach ($users as $index => $user) {
            Student::create([
                'user_id' => $user->id,
                'learning_category_id' => ($index % 5) + 1, // Rotasi 1-5
                'study_program_id' => min(($index % 3) + 1, 3), // Rotasi 1-3
                'nim' => '12345678' . sprintf('%02d', $index),
                'gender' => $index % 2 == 0 ? 'male' : 'female',
                'phone' => '08123456' . sprintf('%04d', $index),
                'address' => 'Jl. Raya No. ' . ($index + 1),
                'nik' => '12345678' . sprintf('%02d', $index),
            ]);
        }
    }
}
