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
        ]);
        DB::table('divisi')->insert([
            'divisi' => 'Divisi Sosial Kemasyarakatan',
        ]);
        DB::table('divisi')->insert([
            'divisi' => 'Divisi Kominfo',
        ]);
    }
}
