<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
            'alamat' => 'Jl. Admin No. 1, Kota Admin',
            'no_hp' => '1234567890',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'student@example.com',
            'password' => bcrypt('user123'),
            'nik' => '1234567890',
            'nisn' => '1234567890',
            'asal_sekolah' => 'SMP Negeri 1 Kota User',
            'alamat' => 'Jl. User No. 1, Kota User',
            'no_hp' => '1234567890',
            'role' => 'student',
        ]);
    }


}
