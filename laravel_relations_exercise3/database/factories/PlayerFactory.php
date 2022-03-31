<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "last_name"=> $this->faker->firstName(),
            "given_name"=> $this->faker->lastName(),
            "age"=> $this->faker->numberBetween($min = 5, $max = 25),
            "telephone"=>$this->faker->phoneNumber(),
            "email" =>$this->faker->freeEmail(),
            "genre"=> $this->faker->creditCardType(),
            "country_of_origin"=> $this->faker->country(),
            "position_id"=> $this->faker->numberBetween(1,4),
        ];
    }
}
