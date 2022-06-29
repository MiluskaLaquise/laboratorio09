<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\apostar::factory(10)->create();
        \App\Models\aventos::factory(10)->create();
        \App\Models\equipos::factory(10)->create();
        \App\Models\ligas::factory(10)->create();
        \App\Models\recargas::factory(10)->create();
        \App\Models\usuarios::factory(10)->create();
    }

}
