<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSpecialization extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            1 => [
                [1, 2, 6, 8],
                [2, 6, 8, 1],
                [6, 8, 1, 2],
            ],
            2 => [
                [4, 5, 6, 7],
                [5, 6, 7, 4],
                [6, 5, 7, 4],
            ],
        ];
    
        foreach ($data as $jobId => $specializationsArray) {
            $job = Job::find($jobId);
    
            if ($job) {
                foreach ($specializationsArray as $specializations) {
                    $job->specializations()->attach($specializations);
                }
            } else {
                // Lakukan sesuatu jika ID pekerjaan tidak ditemukan
            }
        }
    }
}
