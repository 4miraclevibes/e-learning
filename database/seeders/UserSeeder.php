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
                'name' => 'Rahman Alfajri',
                'email' => 'rahman.alfajri@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Affandi Ahmad',
                'email' => 'affandi.ahmad@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ferres Decoya',
                'email' => 'ferres.decoya@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ariiq Fadhlurrohman',
                'email' => 'ariiq.fadhlurrohman@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Aldi Roy Sinabariba',
                'email' => 'aldi.roy@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Novrizal Ramadhani',
                'email' => 'novrizal.ramadhani@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Aydil Ilham Marza',
                'email' => 'aydil.ilham@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Farid',
                'email' => 'muhammad.farid@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Armad Jonsen',
                'email' => 'armad.jonsen@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Bayu Oktaviano',
                'email' => 'bayu.oktaviano@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Zakky Putra',
                'email' => 'muhammad.zakky@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ferly Angga Ramadhan',
                'email' => 'ferly.angga@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Habib Nabil',
                'email' => 'habib.nabil@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Fajar Adrian Fahrezi',
                'email' => 'fajar.adrian@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Aulia Iqbal',
                'email' => 'aulia.iqbal@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Raihan Hidayatullah',
                'email' => 'raihan.hidayatullah@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Harun Al Rasyid',
                'email' => 'harun.alrasyid@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'M. Reza',
                'email' => 'm.reza@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Roziq Roshan Radjasky',
                'email' => 'roziq.roshan@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'M. Ikbal',
                'email' => 'm.ikbal@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Rifat',
                'email' => 'muhammad.rifat@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Wira Buana',
                'email' => 'muhammad.wira@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Rahmat Hidayat',
                'email' => 'rahmat.hidayat@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ikhsanul Fikri',
                'email' => 'ikhsanul.fikri@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Wimahatta',
                'email' => 'muhammad.wimahatta@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Gigih Bagush Herlambang',
                'email' => 'gigih.bagush@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Akmal Dwi Putra',
                'email' => 'akmal.dwi@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Raihan Oktarilta',
                'email' => 'raihan.oktarilta@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Kifli',
                'email' => 'kifli@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Andrianto',
                'email' => 'andrianto@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Nanda Gustri Rizki',
                'email' => 'nanda.gustri@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Sandhy Rhana Rhandika',
                'email' => 'sandhy.rhana@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Yasir Ramadhan S',
                'email' => 'yasir.ramadhan@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'M. Farid Devasla',
                'email' => 'm.farid.devasla@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Alfinatul Akbar',
                'email' => 'alfinatul.akbar@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Yunus',
                'email' => 'muhammad.yunus@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Akmal Surya Baihaqi',
                'email' => 'akmal.surya@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ahmad Fauzi',
                'email' => 'ahmad.fauzi@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Al Rohan Afrullah',
                'email' => 'muhammad.alrohan@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Nadhia Tul Haniyah',
                'email' => 'nadhia.tul@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Azwardi',
                'email' => 'azwardi@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ramadhan Putra',
                'email' => 'ramadhan.putra@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Rizky Akbar',
                'email' => 'muhammad.rizky@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Yuriko Khairangga',
                'email' => 'yuriko.khairangga@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Yosua Partogi Holong Sihole',
                'email' => 'yosua.partogi@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'M. Aly Hasdaco Putra',
                'email' => 'm.aly@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Zifa Oktavianza',
                'email' => 'zifa.oktavianza@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ilkhon',
                'email' => 'ilkhon@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'M. Fatih Meutuah Nasution',
                'email' => 'm.fatih@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Imam Dinul Salam',
                'email' => 'imam.dinul@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Al Thoriq Viroza',
                'email' => 'al.thoriq@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Fauzil Hidayatullah',
                'email' => 'fauzil.hidayatullah@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ahmad Juanda',
                'email' => 'ahmad.juanda@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Rafki Hamdani',
                'email' => 'rafki.hamdani@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Rayhan Ramadhani',
                'email' => 'rayhan.ramadhani@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Fauzan Azima',
                'email' => 'muhammad.fauzan@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhamad Nazmi Karim',
                'email' => 'muhamad.nazmi@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Syahrul Surya',
                'email' => 'syahrul.surya@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Hamdi Ramadhan',
                'email' => 'hamdi.ramadhan@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Revo Alvarenza',
                'email' => 'muhammad.revo@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Angga Putra Perdana',
                'email' => 'angga.putra@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Reza Andila',
                'email' => 'reza.andila@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Muhammad Khalikul Fadly',
                'email' => 'muhammad.khalikul@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Anggi Nur Adnan',
                'email' => 'anggi.nur@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Syamsirullah',
                'email' => 'syamsirullah@example.com',
                'role_id' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Bintang Ramadhan',
                'email' => 'bintang.ramadhan@example.com',
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
