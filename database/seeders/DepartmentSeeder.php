<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Department of Computer Science',
                'code' => 'CS',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Department of Electrical Engineering',
                'code' => 'EE',
                'faculty_id' => 2,
            ],
            [
                'name' => 'Department of Business Administration',
                'code' => 'BA',
                'faculty_id' => 3,
            ],
        ];
        Department::insert($departments);
    }
}
