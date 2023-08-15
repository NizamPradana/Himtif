<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_settings')->insert([
            'sejarah' => "HIMTIF merupakan Organisasi Himpunan Mahasiswa Teknik Informatika yang berada di Perguruan Tinggi Politekin Purbaya Kabupaten Tegal. Himpunan ini berdiri pada tanggal 22 juli 2020 dan masih aktif dalam berbagai kegiatan di Kampus. HIMTIF memiliki tujuan yaitu sebuah Organisai yang mampu menjadi wadah bagi Mahasiswa untuk menyampaikan Aspirasi dan juga menjadi tempat untuk saling belajar bersama Dalam bidang IT",
            
            'visi' => "Himtif sebagai wadah mewujudkan Mahasiswa aktif, solutif, responsive, dan proaktif khususnya Mahasiswa Jurusan Teknik Informatika Politeknik Purbaya.",

            'misi' => "<ul><li>Mengembangkan soft skill, kepribadian, kreativitas dan menyalurkan potensi setiap mahasiswa jurusan.</li><li>Sebagai penyalur aspirasi sekaligus pendukung untuk memperluas wawasan di bidang teknologi dan informasi.</li><li>Membangun dan menjaga solidaritas yang baik antar jurusan.</li>
            <li>Menjalin keharmonisan seluruh elemen jurusan teknik informatika dan lembaga lain.</li></ul>",

            'kontak' => "<ul><li>Instagram : himtifpp</li><li>email : himtif@gmail.com</li><li>WA : 089218321932</li>
            <li>Menjalin keharmonisan seluruh elemen jurusan teknik informatika dan lembaga lain.</li></ul>"
        ]);
    }
}
