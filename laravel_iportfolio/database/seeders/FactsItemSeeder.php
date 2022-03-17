<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("facts_items")->insert([
            "icon"=> "bi bi-emoji-smile",
            "number" => "232",
            "strong" => "Happy Clients",
            "p" => " consequuntur quae",
            "created_at"=>now()
        ]);
        DB::table("facts_items")->insert([
            "icon"=> "bi bi-journal-richtext",
            "number" => "521",
            "strong" => "Projects",
            "p" => " adipisci atque cum quia aut",
            "created_at"=>now()
        ]);
        DB::table("facts_items")->insert([
            "icon"=> "bi bi-journal-richtext",
            "number" => "1453",
            "strong" => "Hours Of Support",
            "p" => " aut commodi quaerat",
            "created_at"=>now()
        ]);
        DB::table("facts_items")->insert([
            "icon"=> "bi bi-people",
            "number" => "32",
            "strong" => "Hard Works",
            "p" => " rerum asperiores dolor",
            "created_at"=>now()
        ]);

    }
}
