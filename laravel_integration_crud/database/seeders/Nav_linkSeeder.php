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
        DB::table('nav_links')->insert([
            "nav_title" => "Home",
            "created_at"=>now()
        ]);
        DB::table('nav_links')->insert([
            "nav_title" => "About",
            "created_at"=>now()
        ]);
        DB::table('nav_links')->insert([
            "nav_title" => "Contact",
            "created_at"=>now()
        ]);
    }
}
