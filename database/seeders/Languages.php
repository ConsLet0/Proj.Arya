<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Languages extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('languages')->insert([
            ['language' => 'Afrikans'],
            ['language' => 'Albanian'],
            ['language' => 'Arabic'],
            ['language' => 'Armenian'],
            ['language' => 'Basque'],
            ['language' => 'Bengali'],
            ['language' => 'Bulgarian'],
            ['language' => 'Catalan'],
            ['language' => 'Cambodian'],
            ['language' => 'Chinese (Mandarin)'],
            ['language' => 'Croation'],
            ['language' => 'Czech'],
            ['language' => 'Danish'],
            ['language' => 'Dutch'],
            ['language' => 'English'],
            ['language' => 'Estonian'],
            ['language' => 'Fiji'],
            ['language' => 'Finnish'],
            ['language' => 'French'],
            ['language' => 'Georgian'],
            ['language' => 'German'],
            ['language' => 'Greek'],
            ['language' => 'Gujarati'],
            ['language' => 'Hebrew'],
            ['language' => 'Hindi'],
            ['language' => 'Hungarian'],
            ['language' => 'Icelandic'],
            ['language' => 'Indonesian'],
            ['language' => 'Irish'],
            ['language' => 'Italian'],
            ['language' => 'Japanese'],
            ['language' => 'Javanese'],
            ['language' => 'Korean'],
            ['language' => 'Latin'],
            ['language' => 'Latvian'],
            ['language' => 'Lithuanian'],
            ['language' => 'Macedonian'],
            ['language' => 'Malay'],
            ['language' => 'Malayalam'],
            ['language' => 'Maltese'],
            ['language' => 'Maori'],
            ['language' => 'Marathi'],
            ['language' => 'Mongolian'],
            ['language' => 'Nepali'],
            ['language' => 'Norwegian'],
            ['language' => 'Persian'],
            ['language' => 'Polish'],
            ['language' => 'Portuguese'],
            ['language' => 'Punjabi'],
            ['language' => 'Quechua'],
            ['language' => 'Rumano'],
            ['language' => 'Russian'],
            ['language' => 'Samoan'],
            ['language' => 'Serbian'],
            ['language' => 'Slovak'],
            ['language' => 'Slovenian'],
            ['language' => 'Spanish'],
            ['language' => 'Swahili'],
            ['language' => 'Swedish'],
            ['language' => 'Tamil'],
            ['language' => 'Tatar'],
            ['language' => 'Telugu'],
            ['language' => 'Thai'],
            ['language' => 'Tibetan'],
            ['language' => 'Tonga'],
            ['language' => 'Turkish'],
            ['language' => 'Ukranian'],
            ['language' => 'Urdu'],
            ['language' => 'Uzbek'],
            ['language' => 'Vietnamese'],
            ['language' => 'Welsh'],
            ['language' => 'Xhosa'],
        ]);
    }
}
