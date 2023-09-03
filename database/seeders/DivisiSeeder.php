<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisi')->insert([
            'divisi' => 'Divisi Pendidikan',
            'deskripsi' => 'Merupakan Divisi yang kinerja kerjanya berkaitan dengan pengembangan ilmu pengetahuan.'
        ]);
        DB::table('divisi')->insert([
            'divisi' => 'Divisi Sosial Kemasyarakatan',
            'deskripsi' => 'Merupakan Divisi yang jalan dibidang sosial kemasyarakatan baik dalam maupun luar kampus.',
        ]);
        DB::table('divisi')->insert([
            'divisi' => 'Divisi Kominfo',
            'deskripsi' => 'Merupakan Divisi yang mengumpulkan atau mencari informasi terkait aspirasi mahasiswa.'
        ]);
    }
}
