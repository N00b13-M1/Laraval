<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            "image"=> "",
            "projectsFinished" => "",
            "happyClients" => "",
            "awards" => "",
            "description" => '',
            "button" => "",
            "created_at"=>now()
        ]);
    }
}
