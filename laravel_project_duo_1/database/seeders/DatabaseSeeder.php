<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            About_itemSeeder::class,
            BannerSeeder::class,
            FeatureSeeder::class,
            Nav_ItemSeeder::class,
            Nav_linkSeeder::class,
            Portfolio_itemSeeder::class,
            TitleSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}
