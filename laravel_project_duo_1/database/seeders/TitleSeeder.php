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
        DB::table("titles")->insert([
            "subtitle" => "ABOUT US",
            "title_portion1" => "Top ",
            "title_portion2" => " Agency & Consult Your Website ",
            "span1" => "Marketing",
            "span2" => "With Us",
            "fulltitle" => "Top (Marketing) Agency & Consult Your Website [With Us]",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "subtitle" => "OUR SERVICES",
            "title_portion1" => "Discover What We Do &",
            "title_portion2" => "To Our",
            "span1" => "Offer",
            "span2" => "Clients",
            "fulltitle" => "Discover What We Do & [Offer] To Our (Clients)",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "subtitle" => "OUR PORTFOLIO",
            "title_portion1" => "Discover Our Recent",
            "title_portion2" => "And",
            "span1" => "Projects",
            "span2" => "Showcases",
            "fulltitle" => "Discover Our Recent (Projects) And [Showcases]",
            "created_at"=>now()
        ]);
    }
}
