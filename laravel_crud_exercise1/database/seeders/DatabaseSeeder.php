<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Team;
use App\Models\Car;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     UserSeeder::class,
        //     TeamSeeder::class,
        //     ArticleSeeder::class,
        //     CarSeeder::class,
        //     ]
        // );

        User::factory(20)->create();
        Team::factory(30)->create();
        Article::factory(40)->create();
        Car::factory(5)->create();
    }
}
