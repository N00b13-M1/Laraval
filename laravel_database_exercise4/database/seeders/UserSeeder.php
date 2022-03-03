<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
        DB::table("users")->insert([
            "nom"=> "Primo",
            "prenom" => "Nicolas",
            "age" => "16",
            "email" => "nicolas@molengeek.com",
            "password" => bcrypt("test2"),
            "numero_de_tel" => "0345342312",
            "commune" => "Molenbeek",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "nom"=> "Abc",
            "prenom" => "Marcyl",
            "age" => "18",
            "email" => "marcyl@molengeek.com",
            "password" => bcrypt("test3"),
            "numero_de_tel" => "034534243",
            "commune" => "Molenbeek",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "nom"=> "Cde",
            "prenom" => "Isma",
            "age" => "23",
            "email" => "isma@molengeek.com",
            "password" => bcrypt("test4"),
            "numero_de_tel" => "0345234243",
            "commune" => "Schaerbeek",
            "created_at"=>now()
        ]);
        DB::table("users")->insert([
            "nom"=> "Fge",
            "prenom" => "Imane",
            "age" => "22",
            "email" => "imane@molengeek.com",
            "password" => bcrypt("test5"),
            "numero_de_tel" => "0345234212",
            "commune" => "Forest",
            "created_at"=>now()
        ]);
    }
}
