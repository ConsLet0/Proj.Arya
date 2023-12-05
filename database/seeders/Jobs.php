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
            ['name' => 'Data Analyst',
            'description' => 'Data Analyst adalah seorang profesional yang memahami data dalam segala bentuknya dan menggunakan keterampilan analisis untuk menghasilkan wawasan yang berharga. Tugas utama seorang Data Analyst adalah mengumpulkan, membersihkan, dan menganalisis data untuk membantu organisasi membuat keputusan yang lebih baik.',
            'image' => 'images/data-analyst.png'],
            ['name' => 'Digital Marketing Specialist',
            'description' => 'Seorang Digital Marketing Specialist adalah seorang profesional yang memiliki pengetahuan dan keahlian khusus dalam merancang, melaksanakan, dan mengelola strategi pemasaran digital untuk mencapai tujuan bisnis tertentu. Peran ini melibatkan berbagai tugas yang mencakup berbagai aspek pemasaran online, termasuk media sosial, SEO, konten, email, dan iklan berbayar.',
            'image' => 'images/data-marketing.png'],
            ['name' => 'Developer',
            'description' => 'Istilah "developer" atau "pengembang" (dalam konteks teknologi informasi) merujuk kepada seseorang yang bertanggung jawab untuk merancang, mengembangkan, dan memelihara perangkat lunak atau aplikasi. Pekerjaan seorang pengembang dapat melibatkan berbagai jenis tugas, termasuk menulis kode program, merancang arsitektur perangkat lunak, menguji, dan memelihara sistem.',
            'image' => 'images/developer.png'],
            ['name' => 'Machine Learning Engineer',
            'description' => '
            Machine Learning Engineer adalah seorang profesional dalam bidang teknologi informasi yang memiliki keahlian khusus dalam pengembangan dan implementasi solusi berbasis machine learning (ML). Tugas utama seorang Machine Learning Engineer adalah merancang, mengembangkan, dan mengoptimalkan model-machine learning untuk memecahkan masalah tertentu atau meningkatkan kinerja suatu sistem.',
            'image' => 'images/machine-learning-engineer.png'],
        ];

        Job::insert($jobs);
    }
}
