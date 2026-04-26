<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class prodi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert([
            [
                'idprodi' => '101',
                'namafakultas' => 'Teknik',
                'namaprodi' => 'Teknik Komputer',
                'kodeprodi' => 'TK',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idprodi' => '102',
                'namafakultas' => 'Teknik',
                'namaprodi' => 'Teknik Mesin',
                'kodeprodi' => 'TM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idprodi' => '103',
                'namafakultas' => 'Teknik',
                'namaprodi' => 'Teknik Sipil',
                'kodeprodi' => 'TS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idprodi' => '104',
                'namafakultas' => 'Pendidikan Sastra',
                'namaprodi' => 'Pendidikan Bahasa Inggris',
                'kodeprodi' => 'PBING',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idprodi' => '105',
                'namafakultas' => 'Pendidikan Sastra',
                'namaprodi' => 'Pendidikan Bahasa Jerman',
                'kodeprodi' => 'PBJER',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idprodi' => '106',
                'namafakultas' => 'Pendidikan Sastra',
                'namaprodi' => 'Pendidikan Bahasa Indonesia',
                'kodeprodi' => 'PBIND',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
