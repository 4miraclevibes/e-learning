<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menghapus semua file dalam storage
        $this->deleteAllFiles();

        // Refresh migration
        Artisan::call('migrate:fresh');

        // Seed data
        $this->call([
            RoleSeeder::class,
            FacultySeeder::class,
            DepartmentSeeder::class,
            StudyProgramSeeder::class,
            LearningCategorySeeder::class,
            UserSeeder::class,
            LecturerSeeder::class,
            StudentSeeder::class,
            CourseSeeder::class,
            ModuleSeeder::class,
            ResultSeeder::class,
        ]);
    }

        /**
     * Menghapus semua file dalam storage.
     */
    public function deleteAllFiles()
    {
        // Mengambil semua file dalam storage
        $files = Storage::allFiles();

        // Menghapus semua file
        foreach ($files as $file) {
            Storage::delete($file);
        }

        // Memeriksa apakah semua file berhasil dihapus
        if (empty(Storage::allFiles())) {
            echo "Semua file dalam storage berhasil dihapus.\n";
        } else {
            echo "Gagal menghapus file dalam storage.\n";
        }
    }
}
