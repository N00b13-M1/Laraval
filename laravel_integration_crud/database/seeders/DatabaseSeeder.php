<?php

namespace Database\Seeders;

use App\Models\Project_item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            Nav_itemSeeder::class,
            Nav_linkSeeder::class,
            Business_itemSeeder::class,
            Footer_itemSeeder::class,
            Project_itemSeeder::class,
            TestimonialSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
