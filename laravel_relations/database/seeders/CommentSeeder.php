<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("comments")->insert([
            "name"=>"Comment 1",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto at aspernatur harum consectetur ex obcaecati ab nisi odit culpa accusantium.",
            "article_id" => 1,
        ]);
        DB::table("comments")->insert([
            "name"=>"Comment 2",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto at aspernatur harum consectetur ex obcaecati ab nisi odit culpa accusantium.",
            "article_id" => 1,
        ]);
        DB::table("comments")->insert([
            "name"=>"Comment 3",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto at aspernatur harum consectetur ex obcaecati ab nisi odit culpa accusantium.",
            "article_id" => 2,
        ]);
    }
}
