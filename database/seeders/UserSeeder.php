<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'role_id' => 1,
                'password' => Hash::make('password'),
            ],
            // Students
            [
                'name' => 'Ahmad Rizki',
                'email' => 'ahmad.rizki@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dewi Safitri',
                'email' => 'dewi.safitri@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Putri Rahayu',
                'email' => 'putri.rahayu@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Fajar',
                'email' => 'muh.fajar@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            // Lecturers
            [
                'name' => 'Dr. Slamet Widodo, M.Pd.',
                'email' => 'slamet.widodo@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Prof. Dr. Sri Mulyani, M.Sc.',
                'email' => 'sri.mulyani@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Bambang Supriyanto, M.T.',
                'email' => 'bambang.supriyanto@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Ratna Kusumawati, M.Si.',
                'email' => 'ratna.kusuma@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Agus Hermawan, M.Kom.',
                'email' => 'agus.hermawan@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Rina Wijayanti, M.Pd.',
                'email' => 'rina.wijayanti@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Hendra Gunawan, M.T.',
                'email' => 'hendra.gunawan@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Maya Indah Sari, M.Si.',
                'email' => 'maya.indah@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Eko Prasetyo, M.Kom.',
                'email' => 'eko.prasetyo@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Nurul Hidayah, M.Pd.',
                'email' => 'nurul.hidayah@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
        ];

        User::insert($users);
    }
}
