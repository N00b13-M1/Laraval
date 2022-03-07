<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "title"=> "SEO & Digital Marketing Agency",
            "button" => "Get Your Quote",
            "button_link" => "#contact",
            "agencyStatus" => "Ready Work",
            "price" => "$720/Month",
            "schedules" => "$450/Meeting",
            "image" => asset('img/banner-right-image.png'),
            "image_after" => asset('img/banner-dec-left.png'),
            "image_before" => asset('img/banner-dec-right.png'),
            "created_at"=>now()
        ]);
    }
}
