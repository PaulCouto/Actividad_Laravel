<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ConferenceSeeder;
use Database\Seeders\DivisionSeeder;
use App\Models\Team;
use App\Models\City;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ConferenceSeeder::class,
            DivisionSeeder::class,

        ]);

        City::factory(20)->create();
        Team::factory(32)->create();
    }
}
