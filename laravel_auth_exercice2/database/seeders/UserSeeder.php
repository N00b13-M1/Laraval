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
            "last_name"=> "admin",
            "first_name"=> "admin",
            "age"=> 25,
            "address"=> "To be confirmed",
            "email"=> "admin@molengeek.com",
            'email_verified_at' => now(),
            "password" => bcrypt('admin'),
            "role_id" => 1,
            "created_at"=>now()
        ]);
    }
}
