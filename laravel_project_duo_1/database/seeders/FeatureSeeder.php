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
        DB::table("features")->insert([
            "numero"=> "01",
            "name" => "Reach Out",
            "data_wow_delay" => "0s",
            "class" => " first-feature ",
            "subClass" => "first-number ",
            "description" => "This HTML5 template is based on Bootstrap 5 CSS. You are free to customize anything.",
            "percentage" => 80,
            "technology" => 'HTML/CSS/JS',
            "created_at"=>now()
        ]);
        DB::table("features")->insert([
            "numero"=> "02",
            "name" => "Develop a Strategy",
            "data_wow_delay" => "0.2s",
            "class" => " second-feature ",
            "subClass" => "second-number ",
            "description" => "Lorem ipsum dolor sit ameter consectetur adipiscing li elit sed do eiusmod.",
            "percentage" => 60,
            "technology" => 'WORDPRESS',
            "created_at"=>now()
        ]);
        DB::table("features")->insert([
            "numero"=> "03",
            "name" => "Implementation",
            "data_wow_delay" => "0.4s",
            "class" => " first-feature ",
            "subClass" => "third-number ",
            "description" => "If this template is useful for your website, please consider to support us a little.",
            "percentage" => 90,
            "technology" => 'MARKETING',
            "created_at"=>now()
        ]);
        DB::table("features")->insert([
            "numero"=> "04",
            "name" => "Analyze the result",
            "data_wow_delay" => "0.6s",
            "class" => " second-feature last-features-item ",
            "subClass" => "fourth-number ",
            "description" => "Below circular progress bar animation supports those CSS values 10, 20, 30, till 100.",
            "percentage" => 70,
            "technology" => 'PHOTOSHOP',
            "created_at"=>now()
        ]);
    }
}
