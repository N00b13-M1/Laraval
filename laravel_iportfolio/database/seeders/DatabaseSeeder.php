<?php

namespace Database\Seeders;

use App\Models\Contact_item;
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
            TitleSeeder::class,
            AboutItemSeeder::class,
            FactsItemSeeder::class,
            SkillsItemSeeder::class,
            PortfolioItemSeeder::class,
            ServicesItemSeeder::class,
            SkillsItemSeeder::class,
            TestimonialItemSeeder::class,
            NavHeadshotSeeder::class,
            NavLinkSeeder::class,
            NavSocialSeeder::class,
            ContactItemSeeder::class,
            ]
        );

        
        // \App\Models\User::factory(10)->create();
    }
}
