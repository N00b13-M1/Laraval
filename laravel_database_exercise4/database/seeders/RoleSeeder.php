<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "nom"=> "Abutaharan",
            "nombre" => 1,
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "nom"=> "Primo",
            "nombre" => 2,
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "nom"=> "Abc",
            "nombre" => 3,
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "nom"=> "Cde",
            "nombre" => 4,
            "created_at"=>now()
        ]);
        DB::table("roles")->insert([
            "nom"=> "Fge",
            "nombre" => 5,
            "created_at"=>now()
        ]);
    }
}