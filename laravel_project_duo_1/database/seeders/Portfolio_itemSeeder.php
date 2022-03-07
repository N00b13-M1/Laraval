<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Portfolio_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "image" => "asset('img/portfolio-01.jpg')",
            "name"=> "Awesome Project 101",
            "category" => "Marketing",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "image" => "asset('img/portfolio-04.jpg')",
            "name"=> "Awesome Project 102",
            "category" => "Branding",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "image" => "asset('img/portfolio-02.jpg')",
            "name"=> "Awesome Project 103",
            "category" => "Consulting",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "image" => "asset('img/portfolio-05.jpg')",
            "name"=> "Awesome Project 104",
            "category" => "Artwork",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "image" => "asset('img/portfolio-03.jpg')",
            "name"=> "Awesome Project 105",
            "category" => "Branding",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "image" => "asset('img/portfolio-06.jpg')",
            "name"=> "Awesome Project 106",
            "category" => "Artwork",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "image" => "asset('img/portfolio-04.jpg')",
            "name"=> "Awesome Project 107",
            "category" => "Creative",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "image" => "asset('img/portfolio-01.jpg')",
            "name"=> "Awesome Project 108",
            "category" => "Consulting",
            "created_at"=>now()
        ]);
    }
}
