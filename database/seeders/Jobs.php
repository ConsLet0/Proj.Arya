<?php

namespace Database\Seeders;

use App\Models\Job;
use Database\Seeders\Jobs;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Jobs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $jobs = [
            ['name' => 'Data Analyst'],
            ['name' => 'Digital Marketing'],
            ['name' => 'Developer'],
            ['name' => 'Machine Learning'],
        ];

        Job::insert($jobs);
    }
}
