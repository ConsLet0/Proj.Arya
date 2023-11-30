<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkingHours extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('working_hours')->insert([
            ['working_hour_range' => 'Paruh Waktu'],
            ['working_hour_range' => 'Kontrak'],
            ['working_hour_range' => 'Full-time'],
        ]);
    }
}
