<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("eleves")->insert([
            "nom"=> "Aboutaharan",
            "prenom"=> "Elias",
            "email" => "elias@molengeek.com",
            "adresse" => "Rue de l'eglise 23, Molenbeek",
            "dob" => date("2000/12/23"),
            "ip_address" => "192.168.4.5",
            "created_at"=>now()
        ]);
    }
}
