<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->text($maxNbChars = 5),
            "link"=>$this->faker->image('public/storage/img',640,480,null,false),
            "name_of_album"=>$this->faker->text($maxNbChars = 5),
            "created_at"=>now()
            ];
    }
}
