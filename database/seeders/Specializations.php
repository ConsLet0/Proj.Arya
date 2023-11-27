<?php

namespace Database\Seeders;

use App\Models\Specialization;
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
        $specializations = [
            ['name' => 'Akutansi/Keuangan'],
            ['name' => 'Komputer/Teknologi Informasi'],
            ['name' => 'IT-Perangkat Lunak'],
            ['name' => 'Penjualan'],
            ['name' => 'Pemasaran'],
            ['name' => 'Aktuaria/Statistik'],
            ['name' => 'Manajemen Tingkat Atas'],
            ['name' => 'IT/Database'],
            ['name' => 'Logistik/Rantai Pasok'],
            ['name' => 'E-Commerce'],
            ['name' => 'Perbankan/Jasa Finansial'],
            ['name' => 'Seni/Media/Komunikasi'],
            ['name' => 'Digital Marketing'],
            ['name' => 'Pemasaran/Pengembangan Bisnis'],
            ['name' => 'Periklanan'],
            ['name' => 'Penjualan Ritel'],
            ['name' => 'Desain Kreatif'],
            ['name' => 'Jurnalis Editor'],
            ['name' => 'Sains & Teknologi (Metabase)'],
            ['name' => 'IT-Admin/Jaringan/Sistem/Database'],
        ];

        Specialization::insert($specializations);
    }
}
