<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("contact_items")->insert([
            "icon"=> "bi bi-geo-alt",
            "title"=> "Location:",
            "description" => "A108 Adam Street, New York, NY 535022",
            "created_at"=>now()
        ]);
        DB::table("contact_items")->insert([
            "icon"=> "bi bi-envelope",
            "title"=> "Email:",
            "description" => "info@example.com",
            "created_at"=>now()
        ]);
        DB::table("contact_items")->insert([
            "icon"=> "bi bi-phone",
            "title"=> "Call:",
            "description" => "+1 558 955 4885",
            "created_at"=>now()
        ]);
    }
}
