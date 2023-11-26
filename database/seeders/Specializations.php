<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Specializations extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('specializations')->insert([
            ['specialization' => 'Akutansi / Keuangan'],
            ['specialization' => 'Komputer / Teknologi Informasi (HTML, CSS, Visio)'],
            ['specialization' => 'IT-Perangkat Lunak (.Net, JAVA)'],
            ['specialization' => 'Penjualan'],
            ['specialization' => 'Pemasaran'],
            ['specialization' => 'Aktuaria/Statistik (Excel, Power Point)'],
            ['specialization' => 'Manajemen Tingkat Atas'],
            ['specialization' => 'IT / Database (SQL)'],
            ['specialization' => 'Logistik / Rantai Pasok'],
            ['specialization' => 'E-Commerce'],
            ['specialization' => 'Perbankan/Jasa Finansial'],
            ['specialization' => 'Seni/Media/Komunikasi'],
            ['specialization' => 'Digital Marketing'],
            ['specialization' => 'Pemasaran/Pengembangan Bisnis'],
            ['specialization' => 'Periklanan'],
            ['specialization' => 'Penjualan Ritel'],
            ['specialization' => 'Desain Kreatif'],
            ['specialization' => 'Jurnalis Editor'],
            ['specialization' => 'Sains & Teknologi (Metabase)'],
            ['specialization' => 'IT-Admin / Jaringan / Sistem / Database'],
        ]);
    }
}
