<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom"=>$this->faker->firstName,
            "prenom"=>$this->faker->lastName,
            "age"=>$this->faker->randomDigitNotNull,
            "email"=>$this->faker->email,
            "password"=>$this->faker->password,
            "pays"=>$this->faker->city,
        ];
    }
}