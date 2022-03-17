<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services_items")->insert([
            "quote"=> "bi bi-bar-chart",
            "picture" => "Sed ut perspiciatis",
            "h4" => "la pariatur",
            "h3" => "la pariatur",
            "created_at"=>now()
        ]);
    }
}
