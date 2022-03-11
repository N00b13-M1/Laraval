<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Footer_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_items')->insert([
            "strong" => "Free Multipurpose Responsive",
            "h3" =>" Landing Page 2019",
            "p" => "Copyright 2019 All Right Reserved By ",
            "href" => " Free html Templates",
            "created_at"=>now()
        ]);
    }
}


