<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "nom"=> "Anglais",
            "text"=> "Bonjour Elias ta note",
            "cote" => 10.5,
            "created_at"=>now()
        ]);
        DB::table("articles")->insert([
            "nom"=> "Francais",
            "text"=> "Bonjour Michael ta note",
            "cote" => 12,
            "created_at"=>now()
        ]);
        DB::table("articles")->insert([
            "nom"=> "Physic",
            "text"=> "Bonjour Michael ta note",
            "cote" => 8,
            "created_at"=>now()
        ]);
    }
}
