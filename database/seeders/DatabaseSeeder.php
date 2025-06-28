<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ClientSeeder::class,
            ModelSeeder::class, // This seeder also runs the ModelVersion seeder logic
            OrderSeeder::class,
        ]);
    }
}
