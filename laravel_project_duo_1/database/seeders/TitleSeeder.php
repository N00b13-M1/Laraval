<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "subtitle" => "",
            "title-portion1"=> "SEO & Digital Marketing Agency",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "subtitle" => "ABOUT US",
            "title-portion1" => "Top",
            "title-portion2" => "Agency & Consult Your Website",
            "title-portion3" => "",
            "span1" => "Marketing",
            "span2" => "With Us",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "subtitle" => "OUR SERVICES",
            "title-portion1" => "Discover What We Do &",
            "title-portion2" => "To Our",
            "title-portion3" => "",
            "span1" => "Offer",
            "span2" => "Clients",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "subtitle" => "OUR SERVICES",
            "title-portion1" => "Discover Our Recent",
            "title-portion2" => "And",
            "title-portion3" => "",
            "span1" => "Projects",
            "span2" => "Showcases",
            "created_at"=>now()
        ]);
    }
}
