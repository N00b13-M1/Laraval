<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServicesItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services_items")->insert([
            "delay" => 0,
            "logo"=> "bi bi-briefcase",
            "title" => "Lorem Ipsum",
            "description" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
            sint occaecati cupiditate non provident",
            "created_at"=>now()
        ]);
        DB::table("services_items")->insert([
            "delay" => 100,
            "logo"=> "bi bi-card-checklist",
            "title" => "Dolor Sitema",
            "description" => "Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat tarad limino ata",
            "created_at"=>now()
        ]);
        DB::table("services_items")->insert([
            "delay" => 200,
            "logo"=> "bi bi-bar-chart",
            "title" => "Sed ut perspiciatis",
            "description" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur",
            "created_at"=>now()
        ]);
        DB::table("services_items")->insert([
            "delay" => 300,
            "logo"=> "bi bi-binoculars",
            "title" => "Magni Dolores",
            "description" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum",
            "created_at"=>now()
        ]);
        DB::table("services_items")->insert([
            "delay" =>400,
            "logo"=> "bi bi-brightness-high",
            "title" => "Nemo Enim",
            "description" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
            praesentium voluptatum deleniti atque",
            "created_at"=>now()
        ]);
        DB::table("services_items")->insert([
            "delay" => 500,
            "logo"=> "bi bi-calendar4-week",
            "title" => "Eiusmod Tempor",
            "description" => "Et harum quidem rerum facilis est et expedita distinctio. Nam libero
            tempore, cum soluta nobis est eligendi",
            "created_at"=>now()
        ]);
    }
}
