<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\LearningCategory;
use App\Models\LearningCategoryQuestionnairy;
use App\Models\Questionnairy;
use Illuminate\Database\Seeder;

class LearningCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Visual',
                'description' => 'Siswa dengan gaya belajar ini lebih baik dalam menyerap informasi melalui gambar, grafik, diagram, dan visual lainnya. Mereka cenderung lebih mudah memahami dan mengingat informasi yang disajikan secara visual.'
            ],
            [
                'name' => 'Auditori',
                'description' => 'Siswa dengan gaya belajar ini lebih baik dalam menyerap informasi melalui suara, percakapan, dan pembicaraan. Mereka cenderung lebih mudah memahami dan mengingat informasi yang disajikan secara verbal.'
            ],
            [
                'name' => 'Teknologi',
                'description' => 'Siswa dengan gaya belajar ini lebih baik dalam menyerap informasi melalui media teknologi dan digital. Mereka cenderung lebih mudah memahami dan mengingat informasi yang disajikan melalui perangkat teknologi.'
            ],
            [
                'name' => 'Kinestetik',
                'description' => 'Siswa dengan gaya belajar ini lebih baik dalam menyerap informasi melalui gerakan fisik, aktivitas praktis, dan manipulasi benda. Mereka cenderung lebih mudah memahami dan mengingat informasi yang disajikan secara praktis.'
            ],
            [
                'name' => 'Campuran',
                'description' => 'Siswa dengan gaya belajar ini lebih baik dalam menyerap informasi melalui kombinasi dari beberapa gaya belajar. Mereka cenderung lebih mudah memahami dan mengingat informasi yang disajikan secara kombinasi.'
            ],
        ];

        foreach ($categories as $category) {
            LearningCategory::create($category);
        }

        $questionnaires = [
            [
                'name' => 'Quiz 1',
                'description' => 'Ketika Anda belajar dari sebuah buku, apa yang biasanya Anda lakukan?',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 2',
                'description' => 'Bagaimana cara Anda mengingat informasi baru?',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 3',
                'description' => 'Ketika Anda menghadapi masalah yang sulit, apa yang biasanya Anda lakukan?',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 4',
                'description' => 'Bagaimana cara Anda mempersiapkan diri untuk ujian?',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 5',
                'description' => 'Apa yang paling membantu Anda dalam memahami materi baru di kelas?',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 6',
                'description' => 'Bagaimana cara Anda paling suka menghabiskan waktu luang?',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 7',
                'description' => 'Apa yang Anda lakukan ketika pertama kali mendapatkan instruksi baru?',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 8',
                'description' => 'Ketika Anda berpartisipasi dalam proyek kelompok, apa peran Anda?',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 9',
                'description' => 'Bagaimana cara Anda memahami arah atau instruksi lokasi?',
                'status' => 'active',
            ],
            [
                'name' => 'Quiz 10',
                'description' => 'Apa yang paling membantu Anda dalam belajar keterampilan baru?',
                'status' => 'active',
            ],
        ];

        foreach ($questionnaires as $questionnaire) {
            Questionnairy::create($questionnaire);
        }

        $answers = [
            [
                'questionnairy_id' => 1,
                'description' => 'Saya melihat gambar dan diagram untuk membantu memahami materi',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 1,
                'description' => 'Saya membaca teks dengan keras atau mendengarkan orang lain membacanya.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 1,
                'description' => 'Saya membuat catatan dan ringkasan dari apa yang saya baca.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 1,
                'description' => 'Saya menggunakan benda konkret atau simulasi untuk memahami konsep.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 1,
                'description' => 'Saya menggunakan kombinasi dari gambar, mendengarkan, menulis, dan aktivitas fisik.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 2,
                'description' => 'Saya mengingat dengan melihat catatan visual atau diagram',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 2,
                'description' => 'Saya mengingat dengan mendengarkan penjelasan atau diskusi.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 2,
                'description' => 'Saya mengingat dengan menulis ulang atau mengetik informasi tersebut.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 2,
                'description' => 'Saya mengingat dengan melakukan aktivitas atau eksperimen yang berkaitan dengan informasi tersebut.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 2,
                'description' => 'Saya menggunakan berbagai cara seperti melihat, mendengarkan, menulis, dan melakukan aktivitas.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 3,
                'description' => 'Saya membuat diagram atau mind map untuk memahami masalah tersebut',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 3,
                'description' => 'Saya berdiskusi dengan teman atau mendengarkan penjelasan orang lain.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 3,
                'description' => 'Saya menuliskan masalah dan mencoba menemukan solusinya melalui tulisan.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 3,
                'description' => 'Saya mencoba memecahkan masalah dengan mempraktikkan solusi yang mungkin.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 3,
                'description' => 'Saya menggunakan kombinasi dari diagram, diskusi, menulis, dan praktik.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 4,
                'description' => 'Saya melihat kembali catatan, diagram, atau grafik',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 4,
                'description' => 'Saya mendengarkan rekaman atau diskusi kelompok tentang materi ujian.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 4,
                'description' => 'Saya membaca kembali buku teks dan membuat ringkasan.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 4,
                'description' => 'Saya melakukan latihan soal atau simulasi ujian.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 4,
                'description' => 'Saya menggunakan berbagai metode seperti melihat catatan, mendengarkan, menulis, dan berlatih.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 5,
                'description' => 'Melihat presentasi atau video yang menunjukkan materi tersebut',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 5,
                'description' => 'Mendengarkan ceramah atau penjelasan dari guru.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 5,
                'description' => 'Membaca buku teks atau handout yang diberikan.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 5,
                'description' => 'Melakukan eksperimen atau aktivitas praktis yang berkaitan dengan materi tersebut.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 5,
                'description' => 'Menggunakan kombinasi dari presentasi visual, ceramah, membaca, dan aktivitas praktis.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 6,
                'description' => 'Melihat gambar, foto, atau menonton video',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 6,
                'description' => 'Mendengarkan musik atau podcast.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 6,
                'description' => 'Membaca buku atau menulis jurnal.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 6,
                'description' => 'Berolahraga atau melakukan kegiatan fisik.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 6,
                'description' => 'Menggabungkan aktivitas seperti menonton, mendengarkan, membaca, dan berolahraga.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 7,
                'description' => 'Saya mencari diagram atau gambar yang menjelaskan instruksi tersebut',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 7,
                'description' => 'Saya meminta seseorang untuk menjelaskan instruksi tersebut secara lisan.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 7,
                'description' => 'Saya membaca dan menuliskan instruksi tersebut.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 7,
                'description' => 'Saya mencoba langsung melakukan instruksi tersebut.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 7,
                'description' => 'Saya menggunakan kombinasi dari melihat, mendengar, membaca, dan mencoba langsung.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 8,
                'description' => 'Saya sering membuat presentasi visual atau diagram',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 8,
                'description' => 'Saya sering berbicara dan mendiskusikan ide dengan anggota kelompok.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 8,
                'description' => 'Saya sering menulis laporan atau mencatat hasil diskusi.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 8,
                'description' => 'Saya sering mengambil peran dalam demonstrasi atau aktivitas fisik.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 8,
                'description' => 'Saya melakukan berbagai peran seperti membuat presentasi, berbicara, menulis, dan demonstrasi.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 9,
                'description' => 'Saya lebih suka melihat peta atau diagram',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 9,
                'description' => 'Saya lebih suka mendengarkan penjelasan arah dari seseorang.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 9,
                'description' => 'Saya lebih suka membaca petunjuk tertulis atau panduan arah.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 9,
                'description' => 'Saya lebih suka mencoba mencari sendiri dengan berjalan atau berkendara.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 9,
                'description' => 'Saya menggunakan kombinasi dari melihat peta, mendengarkan penjelasan, membaca petunjuk, dan mencoba sendiri.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 10,
                'description' => 'Melihat demonstrasi atau video tutorial',
                'learning_category_id' => 1,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 10,
                'description' => 'Mendengarkan penjelasan atau instruksi dari seseorang yang ahli.',
                'learning_category_id' => 2,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 10,
                'description' => 'Membaca panduan atau buku tentang keterampilan tersebut.',
                'learning_category_id' => 3,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 10,
                'description' => 'Mencoba langsung dan berlatih keterampilan tersebut.',
                'learning_category_id' => 4,
                'status' => 'active',
            ],
            [
                'questionnairy_id' => 10,
                'description' => 'Menggunakan kombinasi dari melihat demonstrasi, mendengarkan penjelasan, membaca panduan, dan berlatih.',
                'learning_category_id' => 5,
                'status' => 'active',
            ],
        ];
        foreach ($answers as $answer) {
            LearningCategoryQuestionnairy::create($answer);
        }
    }
}
