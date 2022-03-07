<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class About_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "image"=> asset('img/about-left-image.png'),
            "projectsFinished" => "750+",
            "happyClients" => "340+",
            "awards" => "128+",
            "description" => ' is free digital marketing CSS template provided by TemplateMo website. You are allowed to use this template for your business websites. Please DO NOT redistribute this template ZIP file on any Free CSS collection websites. You may contact us for more information. Thank you.',
            "button" => "Discover Company",
            'button_link' => "#",
            "span" => "SEO Dream",
            "span_href" => "https://templatemo.com/tm-563-seo-dream",
            "created_at"=>now()
        ]);
    }
}
