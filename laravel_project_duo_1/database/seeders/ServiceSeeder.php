<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.{{  }}
     *{{  }}
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            "delay" => "0.3s",
            "image"=> 'img/service-icon-01.png',
            "name" => "Similar Websites",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            dormque laudantium.",
            "created_at"=>now()
        ]);
        DB::table("services")->insert([
            "delay" => "0.4s",
            "image"=> 'img/service-icon-02.png',
            "name" => "Website Trends",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            dormque laudantium.",
            "created_at"=>now()
        ]);
        DB::table("services")->insert([
            "delay" => "0.5s",
            "image"=> 'img/service-icon-03.png',
            "name" => "Traffic Analysis",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            dormque laudantium.",
            "created_at"=>now()
        ]);
        DB::table("services")->insert([
            "delay" => "0.6s",
            "image"=> 'img/service-icon-03.png',
            "name" => "Optimizing Keywords",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.",
            "created_at"=>now()
        ]);
        DB::table("services")->insert([
            "delay" => "0.7s",
            "image"=> 'img/service-icon-01.png',
            "name" => "Page Optimizations",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.",
            "created_at"=>now()
        ]);
        DB::table("services")->insert([
            "delay" => "0.8s",
            "image"=> 'img/service-icon-02.png',
            "name" => "Deep URL Analysis",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.",
            "created_at"=>now()
        ]);
    }
}
