<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    // protected $model = Team::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $positions = ["GOA","LB", "RB", "LCD", "RCD","DMF", "AMF", "LW", "RW", "CS"];
        // dd($positions[0]);
        return [
            "name"=>$this->faker->name,
            "number"=>$this->faker->randomNumber(),
            "coach_name"=>$this->faker->name,
            "position"=>$this->faker->jobTitle
        ];
    }
}
