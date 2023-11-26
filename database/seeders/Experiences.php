<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Experiences extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('year_experiences')->insert([
            ['experience_range' => 'Fresh Graduate'],
            ['experience_range' => '1 Tahun'],
            ['experience_range' => '2 Tahun'],
            ['experience_range' => '3 Tahun'],
            ['experience_range' => '4 Tahun'],
            ['experience_range' => '5 Tahun'],
            ['experience_range' => '< 5 Tahun'],
        ]);
    }
}
