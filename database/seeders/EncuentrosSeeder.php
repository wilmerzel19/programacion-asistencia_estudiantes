<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EncuentrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Encuentro::factory(10)->create();
    }
}
