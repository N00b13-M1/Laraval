<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Equipe;
use App\Models\Portfolio;
use App\Models\Role;
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
        $this->call([
            ArticleSeeder::class,
            EquipeSeeder::class,
            PortfolioSeeder::class,
            UserSeeder::class,
            ]
        );

        Article::factory(30)->create();
        Equipe::factory(50)->create();
        Portfolio::factory(10)->create();
        User::factory(20)->create();
    }
}
