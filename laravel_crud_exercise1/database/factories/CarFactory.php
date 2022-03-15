<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    // protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "make"=>$this->faker->company,
            "year"=>$this->faker->dateTimeThisYear(),
            "color"=>$this->faker->name,
            "prix"=>$this->faker->randomDigit(),
            "reduction"=>$this->faker->randomDigit()
        ];
    }
}
