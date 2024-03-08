<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conferencia = new Conference;
        $conferencia->conference_name = "American Football Conference";
        $conferencia->conference_logo = "URL";
        $conferencia->sb_titles_conf = 30;
        $conferencia->save();

        $conferencia = new Conference;
        $conferencia->conference_name = "National Football Conference";
        $conferencia->conference_logo = "URL";
        $conferencia->sb_titles_conf = 15;
        $conferencia->save();
    }
}
