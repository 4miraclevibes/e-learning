<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'role_id' => 1,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'student1',
                'email' => 'student1@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'student2',
                'email' => 'student2@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'student3',
                'email' => 'student3@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'student4',
                'email' => 'student4@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'student5',
                'email' => 'student5@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer1',
                'email' => 'lecturer1@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer2',
                'email' => 'lecturer2@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer3',
                'email' => 'lecturer3@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer4',
                'email' => 'lecturer4@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer5',
                'email' => 'lecturer5@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer6',
                'email' => 'lecturer6@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer7',
                'email' => 'lecturer7@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer8',
                'email' => 'lecturer8@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer9',
                'email' => 'lecturer9@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'lecturer10',
                'email' => 'lecturer10@example.com',
                'role_id' => 3,
                'password' => Hash::make('password'),
            ],
        ];
        User::insert($users);
    }
}
