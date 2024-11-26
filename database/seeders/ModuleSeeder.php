<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            [
                'learning_category_id' => 1, // Visual
                'course_detail_id' => 1,
                'name' => 'Pengenalan Algoritma',
                'pertemuan' => 1,
                'description' => '<p>Modul ini dirancang untuk gaya belajar Visual. Materi akan disajikan melalui:</p>
                                <ul>
                                    <li>Diagram alur (flowchart)</li>
                                    <li>Mind mapping</li>
                                    <li>Infografis</li>
                                    <li>Video tutorial</li>
                                </ul>
                                <p>Siswa akan lebih mudah memahami konsep algoritma melalui representasi visual.</p>'
            ],
            [
                'learning_category_id' => 2, // Auditori
                'course_detail_id' => 1,
                'name' => 'Pengenalan Algoritma',
                'pertemuan' => 1,
                'description' => '<p>Modul ini dirancang untuk gaya belajar Auditori. Materi akan disajikan melalui:</p>
                                <ul>
                                    <li>Rekaman audio penjelasan</li>
                                    <li>Diskusi kelompok</li>
                                    <li>Presentasi lisan</li>
                                    <li>Tanya jawab interaktif</li>
                                </ul>
                                <p>Siswa akan lebih mudah memahami konsep algoritma melalui penjelasan verbal dan diskusi.</p>'
            ],
            [
                'learning_category_id' => 3, // Teknologi
                'course_detail_id' => 1,
                'name' => 'Pengenalan Algoritma',
                'pertemuan' => 1,
                'description' => '<p>Modul ini dirancang untuk gaya belajar berbasis Teknologi. Materi akan disajikan melalui:</p>
                                <ul>
                                    <li>Aplikasi pembelajaran interaktif</li>
                                    <li>Simulasi komputer</li>
                                    <li>E-book interaktif</li>
                                    <li>Platform coding online</li>
                                </ul>
                                <p>Siswa akan lebih mudah memahami konsep algoritma melalui media teknologi digital.</p>'
            ],
            [
                'learning_category_id' => 4, // Kinestetik
                'course_detail_id' => 1,
                'name' => 'Pengenalan Algoritma',
                'pertemuan' => 1,
                'description' => '<p>Modul ini dirancang untuk gaya belajar Kinestetik. Materi akan disajikan melalui:</p>
                                <ul>
                                    <li>Praktik langsung</li>
                                    <li>Role-playing algoritma</li>
                                    <li>Eksperimen hands-on</li>
                                    <li>Proyek praktis</li>
                                </ul>
                                <p>Siswa akan lebih mudah memahami konsep algoritma melalui aktivitas fisik dan praktik langsung.</p>'
            ],
            [
                'learning_category_id' => 5, // Campuran
                'course_detail_id' => 1,
                'name' => 'Pengenalan Algoritma',
                'pertemuan' => 1,
                'description' => '<p>Modul ini dirancang untuk gaya belajar Campuran. Materi akan disajikan melalui kombinasi:</p>
                                <ul>
                                    <li>Visual: diagram dan infografis</li>
                                    <li>Auditori: diskusi dan presentasi</li>
                                    <li>Teknologi: simulasi digital</li>
                                    <li>Kinestetik: praktik langsung</li>
                                </ul>
                                <p>Siswa akan mendapatkan pengalaman belajar yang komprehensif melalui berbagai metode pembelajaran.</p>'
            ],
        ];

        foreach ($modules as $module) {
            Module::create($module);
        }
    }
}
