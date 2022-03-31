<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            "position" => "Forward",
            "created_at"=>now()
        ]);
        DB::table('positions')->insert([
            "position" => "Midfielder",
            "created_at"=>now()
        ]);
        DB::table('positions')->insert([
            "position" => "Defender",
            "created_at"=>now()
        ]);
        DB::table('positions')->insert([
            "position" => "Substitute",
            "created_at"=>now()
        ]);
    }
}
