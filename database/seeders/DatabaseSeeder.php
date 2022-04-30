<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universidad;

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
        Universidad::factory(10)->create();
    }
}
