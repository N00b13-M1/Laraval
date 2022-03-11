<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Business_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_items')->insert([
            "span" => "Increase your client for",
            "h2" => "Better position of Business",
            "p_description" => "It is a long established fact that a reader will be distracted by the readable content of a
            page ",
            "img_path" => "images/business_img.jpg",
            "p_lorem" => "There are many variations of passages of Lorem Ipsum available, but the majority have
            suffered alteration in some form, by injected humour, or randomised words which
            don't look even slightly believableThere are many variations of passages of Lorem
            Ipsum available, but the majority have suffered alteration in some form, by injected
            humour, or randomised words which don't look even slightly believable",
            "href" => "Read more",
            "created_at"=>now()
        ]);
    }
}
