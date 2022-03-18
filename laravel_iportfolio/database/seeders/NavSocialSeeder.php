<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("nav_socials")->insert([
            "href" => "#",
            "icon" => "bx bxl-twitter",
            "created_at"=>now()
        ]);
        DB::table("nav_socials")->insert([
            "href" => "#",
            "icon" => "bx bxl-facebook",
            "created_at"=>now()
        ]);
        DB::table("nav_socials")->insert([
            "href" => "#",
            "icon" => "bx bxl-instagram",
            "created_at"=>now()
        ]);
        DB::table("nav_socials")->insert([
            "href" => "#",
            "icon" => "bx bxl-skype",
            "created_at"=>now()
        ]);
        DB::table("nav_socials")->insert([
            "href" => "#",
            "icon" => "bx bxl-linkedin",
            "created_at"=>now()
        ]);
    }
}

