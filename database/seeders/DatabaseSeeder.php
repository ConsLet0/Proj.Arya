<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Experiences::class);
        $this->call(Fields::class);
        $this->call(Languages::class);
        $this->call(Majors::class);
        $this->call(Qualifications::class);
        $this->call(Specializations::class);
        $this->call(WorkingHours::class);
    }
}
