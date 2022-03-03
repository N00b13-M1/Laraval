<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CommentaireSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        //or 
        // $this->call([
        //     CommentaireSeeder::class,
        //     RoleSeeder::class,
        //     UserSeeder::class,
        //     ]
        // );
        // \App\Models\User::factory(10)->create();
        Role::factory(20)->create();
    }
}
