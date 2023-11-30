<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Fields extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('fields')->insert([
            ['field' => 'Agrikultural'],
            ['field' => 'Akunting'],
            ['field' => 'Asuransi'],
            ['field' => 'Automobil'],
            ['field' => 'Bahan Kimia'],
            ['field' => 'Biotechnology'],
            ['field' => 'Call Center/IT Servis'],
            ['field' => 'Elektronik'],
            ['field' => 'Hiburan'],
            ['field' => 'Hotel/Pariwisata'],
            ['field' => 'Ilmu Pengetahuan Teknologi'],
            ['field' => 'Industri Berat'],
            ['field' => 'Kesehatan'],
            ['field' => 'Komputer'],
            ['field' => 'Konsultasi'],
            ['field' => 'Minyak/Gas'],
            ['field' => 'Pelayanan Arsitek'],
            ['field' => 'Pendidikan'],
            ['field' => 'Perbankan/Keuangan'],
            ['field' => 'Periklanan'],
            ['field' => 'Pertambangan'],
            ['field' => 'Produk Konsumen'],
            ['field' => 'R&D'],
            ['field' => 'Retail'],
            ['field' => 'Tekstil'],
            ['field' => 'Telekomunikasi'],
            ['field' => 'Transportasi/Logistik'],
            ['field' => 'Travel/Pariwisata'],
        ]);
    }
}
