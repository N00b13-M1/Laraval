<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "numero"=> "01",
            "name" => "Reach Out",
            "image"=> asset("features-icon-black-01.png"),
            "image_hover"=> asset("fimg/features-icon-white-01.png"),
            "description" => "This HTML5 template is based on Bootstrap 5 CSS. You are free to customize anything.",
            "percentage" => "80%",
            "technology" => 'HTML/CSS/JS',
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "numero"=> "02",
            "name" => "Develop a Strategy",
            "image"=> asset("features-icon-black-02.png"),
            "image_hover"=> asset("fimg/features-icon-white-02.png"),
            "description" => "Lorem ipsum dolor sit ameter consectetur adipiscing li elit sed do eiusmod.",
            "percentage" => "60%",
            "technology" => 'WORDPRESS',
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "numero"=> "03",
            "name" => "Implementation",
            "image"=> asset("features-icon-black-01.png"),
            "image_hover"=> asset("fimg/features-icon-white-01.png"),
            "description" => "If this template is useful for your website, please consider to support us a little.",
            "percentage" => "90%",
            "technology" => 'MARKETING',
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "numero"=> "04",
            "name" => "Analyze the result",
            "image"=> asset("features-icon-black-02.png"),
            "image_hover"=> asset("fimg/features-icon-white-02.png"),
            "description" => "Below circular progress bar animation supports those CSS values 10, 20, 30, till 100.",
            "percentage" => "70%",
            "technology" => 'PHOTOSHOP',
            "created_at"=>now()
        ]);
    }
}
