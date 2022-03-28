<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "last_name"=>$this->faker->lastName(),
            "given_name"=>$this->faker->firstName(),
            "age"=>$this->faker->numberBetween(0,130),
            "email"=>$this->faker->email(),
            "password"=>$this->faker->password(),
            "date_of_birth"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "genre"=>$this->faker->domainword(),
            "created_at"=>now()
        ];
    }
}
