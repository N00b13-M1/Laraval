<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nav_linkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("nav_links")->insert([
            "href"=> "#top",
            "title"=> "Home",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#features",
            "title"=> "Features",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#about",
            "title"=> "About Us",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#services",
            "title"=> "Services",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#portfolio",
            "title"=> "Portfolio",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#contact",
            "title"=> "Contact Us",
            "created_at"=>now()
        ]);
    }
}
