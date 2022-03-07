<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Nav_ItemSeeder extends Seeder
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
        $table->string("title", 10)->nullable();
            $table->string("path")->nullable();
    }

}
