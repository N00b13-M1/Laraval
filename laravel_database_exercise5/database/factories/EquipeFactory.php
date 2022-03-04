<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipe>
 */
class EquipeFactory extends Factory
{
    protected $model = Equipe::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom"=>$this->faker->lastName,
            "ville"=>$this->faker->city,
            "commune"=>$this->faker->address,
            "number_of_players"=>$this->faker->numberBetween(1,22),
            "number_of_posts"=>$this->faker->randomNumber(),
        ];
    }
}
