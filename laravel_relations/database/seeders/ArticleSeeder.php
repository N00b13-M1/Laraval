<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "name"=>"Article1",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto at aspernatur harum consectetur ex obcaecati ab nisi odit culpa accusantium."
        ]);
        DB::table("articles")->insert([
            "name"=>"Article2",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto at aspernatur harum consectetur ex obcaecati ab nisi odit culpa accusantium."
        ]);

    }
}
