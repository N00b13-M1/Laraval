<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("about_items")->insert([
            "strong"=> "Birthday:",
            "span" => "1 May 1995",
            "created_at"=>now()
        ]);
        DB::table("about_items")->insert([
            "strong"=> "Website:",
            "span" => "www.example.com",
            "created_at"=>now()
        ]);
        DB::table("about_items")->insert([
            "strong"=> "Phone:",
            "span" => "+123 456 7890",
            "created_at"=>now()
        ]);
        DB::table("about_items")->insert([
            "strong"=> "City:",
            "span" => "New York, USA",
            "created_at"=>now()
        ]);
        DB::table("about_items")->insert([
            "strong"=> "Age:",
            "span" => "30",
            "created_at"=>now()
        ]);
        DB::table("about_items")->insert([
            "strong"=> "Degree:",
            "span" => "Master",
            "created_at"=>now()
        ]);
        DB::table("about_items")->insert([
            "strong"=> "PhEmailOne:",
            "span" => "email@example.com",
            "created_at"=>now()
        ]);
        DB::table("about_items")->insert([
            "strong"=> "Freelance:",
            "span" => "Available",
            "created_at"=>now()
        ]);

    }
}


