<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "numero"=> ""
            "image"=> "",
            "name" => "",
            "description" => "",
            "percentage" => "",
            "technology" => '',

            "created_at"=>now()
        ]);
    }
}
