<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "nom"=> "Abutaharan",
            "prenom" => "Elias",
            "age" => "14",
            "email" => "elias@molengeek.com",
            "password" => bcrypt("test"), //Hash::make('mdp) or encrypt("mdp")
            "numero_de_tel" => "034532312",
            "commune" => "Molenbeek",
            "created_at"=>now()
        ]);
    }
}
