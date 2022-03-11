<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Project_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_items')->insert([
            "span" => "Previous Projects",
            "h2" => "Better position of Business",
            "p1" => "It is a long established fact that a reader will be distracted by the readable content of a
            page ",
            "img" => "images/projects_img.png",
            "p2" => "There are many variations of passages of Lorem Ipsum available, but the majority have
            suffered alteration in some form, by injected humour, or randomised words which
            don't look even slightly believableThere are many variations of passages of Lorem
            Ipsum available, but the majority have suffered alteration in some form, by injected
            humour, or randomised words which don't look even slightly believable",
            "href" => "Read more",
            "created_at"=>now()
        ]);
    }
}
