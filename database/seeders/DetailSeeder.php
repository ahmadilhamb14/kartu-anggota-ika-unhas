<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('detail_models')->insert([
            'nim' => 'H071181008',
            'username' => 'ellajalah',
            'prodi' => 'Sistem Informasi',
            'angkatan' => '2018',
            'tanggalLahir' => '2023/07/14',
            'kabKota' => 'wajo',
            'tahunLulus' => '2023',
            'jenisKelamin' => 'laki-laki'
        ]);
    }
}
