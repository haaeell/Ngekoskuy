<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'Admin'],
            ['name' => 'Contributor'],
            ['name' => 'Viewer'],
        ]);

        // Menambahkan admin ke tabel 'users' dengan role_id 1 (Administrator)
        DB::table('users')->insert([
            'name' => 'Nama Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123123'), // Ganti 'password' dengan kata sandi yang Anda inginkan
            'role_id' => 1, // 1 adalah ID untuk peran Administrator
        ]);
    }
}
