<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #AFC

        $division = new Division;
        $division->division_name = "AFC North";
        $division->sb_titles_div = 10;
        $division->save();

        $division = new Division;
        $division->division_name = "AFC South";
        $division->sb_titles_div = 8;
        $division->save();

        $division = new Division;
        $division->division_name = "AFC West";
        $division->sb_titles_div = 6;
        $division->save();

        $division = new Division;
        $division->division_name = "AFC East";
        $division->sb_titles_div = 4;
        $division->save();

        # NFC

        $division = new Division;
        $division->division_name = "NFC North";
        $division->sb_titles_div = 12;
        $division->save();

        $division = new Division;
        $division->division_name = "NFC South";
        $division->sb_titles_div = 14;
        $division->save();

        $division = new Division;
        $division->division_name = "NFC West";
        $division->sb_titles_div = 16;
        $division->save();

        $division = new Division;
        $division->division_name = "NFC East";
        $division->sb_titles_div = 18;
        $division->save();
    }
}
