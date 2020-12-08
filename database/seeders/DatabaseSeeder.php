<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\WorkSocial;
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
        // \App\Models\User::factory(10)->create();
        Patient::factory(15)->create();
        $this->call(ObraSocialSeeder::class);
    }
}
