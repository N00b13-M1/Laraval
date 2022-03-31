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
    public function definition()
    {
        return [
            "name"=> $this->faker->company(),
            "city"=> $this->faker->city(),
            "country"=> $this->faker->country(),
            "number_players" => $this->faker->numberBetween($min = 1, $max = 9),
            "number_forwards" => $this->faker->numberBetween($min = 0, $max = 2),
            "number_midfielders" => $this->faker->numberBetween($min = 0, $max = 2),
            "number_defenders" => $this->faker->numberBetween($min = 0, $max = 2),
            "number_substitutes" => $this->faker->numberBetween($min = 0, $max = 3),
        ];
    }
}
