<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Menghapus data agar tidak duplikat (opsional)
        // Jika ada error foreign key, lewati baris ini
        DB::table('users')->delete();

        User::create([
            'name' => 'Administrator Kampus',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'Master Juanda',
            'username' => 'master',
            'email' => 'masterjuanda@gmail.com',
            'password' => Hash::make('master123'),
        ]);
    }
}
