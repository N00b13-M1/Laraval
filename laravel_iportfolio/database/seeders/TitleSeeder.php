<?php

namespace Database\Seeders;

use Illuminate\Database\Console\DbCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titles")->insert([
            "main_title"=> "Alex Smith",
            "sub_title" => "I'm",
            "sub_title2" => "",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "main_title"=> "About",
            "sub_title" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "sub_title2" => "",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "main_title"=> "UI/UX Designer & Web Developer.",
            "sub_title" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "sub_title2" => "Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "main_title"=> "Facts",
            "sub_title" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "sub_title2" => "",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "main_title"=> "Skills",
            "sub_title" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "sub_title2" => "",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "main_title"=> "Resume",
            "sub_title" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "sub_title2" => "",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "main_title"=> "Portfolio",
            "sub_title" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "sub_title2" => "",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "main_title"=> "Services",
            "sub_title" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "sub_title2" => "",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "main_title"=> "Testimonials",
            "sub_title" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "sub_title2" => "",
            "created_at"=>now()
        ]);
        DB::table("titles")->insert([
            "main_title"=> "Contact",
            "sub_title" => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "sub_title2" => "",
            "created_at"=>now()
        ]);
    }
}
