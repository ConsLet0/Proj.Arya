<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Majors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('majors')->insert([
            ['major' => 'Teknik Industri'],
            ['major' => 'Teknik Informatika'],
            ['major' => 'Sistem Informasi'],
            ['major' => 'Teknik Mesin'],
            ['major' => 'Manajemen'],
            ['major' => 'Statistika'],
            ['major' => 'Matematika'],
            ['major' => 'Ilmu Komputer'],
            ['major' => 'Teknik Komputer'],
            ['major' => 'Finance'],
            ['major' => 'Accounting'],
        ]);
    }
}
