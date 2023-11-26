<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Qualifications extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('education_qualifications')->insert([
            ['qualification' => 'D4'],
            ['qualification' => 'S1'],
            ['qualification' => 'S2'],
            ['qualification' => 'S3'],
        ]);
    }
}
