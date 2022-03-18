<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("nav_links")->insert([
            "href"=> "#hero",
            "logo" => "bx bx-home",
            "span" => "Home",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#about",
            "logo" => "bx bx-user",
            "span" => "About",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#resume",
            "logo" => "bx bx-file-blank",
            "span" => "Resume",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#portfolio",
            "logo" => "bx bx-book-content",
            "span" => "Portfolio",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#services",
            "logo" => "bx bx-server",
            "span" => "Services",
            "created_at"=>now()
        ]);
        DB::table("nav_links")->insert([
            "href"=> "#contact",
            "logo" => "bx bx-envelope",
            "span" => "Contact",
            "created_at"=>now()
        ]);


    }
}
