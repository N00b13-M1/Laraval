<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolio_items")->insert([
            "filter" => "filter-app",
            "source"=> "portfolio/portfolio-1.jpg",
            "href1" => "img/portfolio/portfolio-1.jpg",
            "title1" => "App 1",
            "href2"=> "portfolio-details.html",
            "title2" => "More Details",
            "created_at"=>now()
        ]);
        DB::table("portfolio_items")->insert([
            "filter" => "filter-web",
            "source"=> "portfolio/portfolio-2.jpg",
            "href1" => "img/portfolio/portfolio-2.jpg",
            "title1" => "Web 3",
            "href2"=> "portfolio-details.html",
            "title2" => "More Details",
            "created_at"=>now()
        ]);
        DB::table("portfolio_items")->insert([
            "filter" => "filter-app",
            "source"=> "portfolio/portfolio-3.jpg",
            "href1" => "img/portfolio/portfolio-3.jpg",
            "title1" => "App 2",
            "href2"=> "portfolio-details.html",
            "title2" => "More Details",
            "created_at"=>now()
        ]);
        DB::table("portfolio_items")->insert([
            "filter" => "filter-card",
            "source"=> "portfolio/portfolio-4.jpg",
            "href1" => "img/portfolio/portfolio-4.jpg",
            "title1" => "Card 2",
            "href2"=> "portfolio-details.html",
            "title2" => "More Details",
            "created_at"=>now()
        ]);
        DB::table("portfolio_items")->insert([
            "filter" => "filter-web",
            "source"=> "portfolio/portfolio-5.jpg",
            "href1" => "img/portfolio/portfolio-5.jpg",
            "title1" => "Web 2",
            "href2"=> "portfolio-details.html",
            "title2" => "More Details",
            "created_at"=>now()
        ]);
        DB::table("portfolio_items")->insert([
            "filter" => "filter-app",
            "source"=> "portfolio/portfolio-6.jpg",
            "href1" => "img/portfolio/portfolio-6.jpg",
            "title1" => "App 3",
            "href2"=> "portfolio-details.html",
            "title2" => "More Details",
            "created_at"=>now()
        ]);
        DB::table("portfolio_items")->insert([
            "filter" => "filter-app",
            "source"=> "portfolio/portfolio-7.jpg",
            "href1" => "img/portfolio/portfolio-7.jpg",
            "title1" => "Card 1",
            "href2"=> "portfolio-details.html",
            "title2" => "More Details",
            "created_at"=>now()
        ]);
        DB::table("portfolio_items")->insert([
            "filter" => "filter-card",
            "source"=> "portfolio/portfolio-8.jpg",
            "href1" => "img/portfolio/portfolio-8.jpg",
            "title1" => "Card 3",
            "href2"=> "portfolio-details.html",
            "title2" => "More Details",
            "created_at"=>now()
        ]);
        DB::table("portfolio_items")->insert([
            "filter" => "filter-web",
            "source"=> "portfolio/portfolio-9.jpg",
            "href1" => "img/portfolio/portfolio-9.jpg",
            "title1" => "Web 3",
            "href2"=> "portfolio-details.html",
            "title2" => "More Details",
            "created_at"=>now()
        ]);
    }
}
