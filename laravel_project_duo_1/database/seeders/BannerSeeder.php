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
        DB::table("banners")->insert([
            "title"=> "SEO & Digital Marketing Agency",
            "button" => "Get Your Quote",
            "button_link" => "#contact",
            "agencyStatus" => "Ready Work",
            "price" => "$720/Month",
            "schedules" => "$450/Meeting",
            "image" => 'img/banner-right-image.png',
            "image_after" => 'img/banner-dec-left.png',
            "image_before" => 'img/banner-dec-right.png',
            "created_at"=>now()
        ]);
    }
}
