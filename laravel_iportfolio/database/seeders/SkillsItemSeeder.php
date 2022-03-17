<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("skills_items")->insert([
            "language"=> "HTML",
            "percentage" => "100%",
            "value" => 100,
            "created_at"=>now()
        ]);
        DB::table("skills_items")->insert([
            "language"=> "CSS",
            "percentage" => "90%",
            "value" => 90,
            "created_at"=>now()
        ]);
        DB::table("skills_items")->insert([
            "language"=> "JAVASCRIPT",
            "percentage" => "75%",
            "value" => 75,
            "created_at"=>now()
        ]);
        DB::table("skills_items")->insert([
            "language"=> "PHP",
            "percentage" => "80%",
            "value" => 80,
            "created_at"=>now()
        ]);
        DB::table("skills_items")->insert([
            "language"=> "WORDPRESS/CMS",
            "percentage" => "90%",
            "value" => 90,
            "created_at"=>now()
        ]);
        DB::table("skills_items")->insert([
            "language"=> "PHOTOSHOP",
            "percentage" => "55%",
            "value" => 55,
            "created_at"=>now()
        ]);
    }
}
