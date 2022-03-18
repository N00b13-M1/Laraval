<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavHeadshotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("nav_headshots")->insert([
            "photo"=> "img/profile-img.jpg",
            "title" => "Alex Smith",
            "created_at"=>now()
        ]);
    }
}
