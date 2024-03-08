<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          => $this->faker->firstname(),
            'city_id'       => $this->faker->numberBetween(1, 20),
            'titles'        => $this->faker->numberBetween(0, 5),
            'division_id'   => $this->faker->numberBetween(1, 8),
            'conference_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
