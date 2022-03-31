<?php

namespace Database\Seeders;

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
            PositionSeeder::class,
        ]);
        \App\Models\Photo::factory(20)->create();
        \App\Models\Player::factory(20)->create();
        \App\Models\Team::factory(5)->create();
    }
}
