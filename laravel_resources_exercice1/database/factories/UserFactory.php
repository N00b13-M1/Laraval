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
            "lastName"=>$this->faker->lastName,
            "givenName"=>$this->faker->firstName,
            "age"=>$this->faker->numberBetween(0,150),
            "date_of_birth"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "email"=>$this->faker->email,
            "password"=>$this->faker->password,
            "created_at"=>now()
        ];
    }
}
