<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculties = [
            [
                'name' => 'Faculty of Science',
                'code' => 'FS',
            ],
            [
                'name' => 'Faculty of Engineering',
                'code' => 'FE',
            ],
            [
                'name' => 'Faculty of Business',
                'code' => 'FB',
            ],
        ];
        Faculty::insert($faculties);
    }
}
