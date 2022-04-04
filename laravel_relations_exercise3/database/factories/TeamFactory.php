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
            "continent"=> $this->faker->randomElement(["Europe", "Outside-Europe"]),
            "number_players" => 9,
            "number_forwards" => 2,
            "number_midfielders" => 2,
            "number_defenders" => 2,
            "number_substitutes" => 3,
        ];
    }
}
