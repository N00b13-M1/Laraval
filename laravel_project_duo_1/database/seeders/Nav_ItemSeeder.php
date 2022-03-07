<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nav_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("nav_items")->insert([
            "title"=> "SEO Dream",
            "path" => 'img/logo-icon.png',
            "created_at"=>now()
        ]);

    }

}
