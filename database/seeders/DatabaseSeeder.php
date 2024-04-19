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
            CurrencyTableSeeder::class,
            CategoryTableSeeder::class,
            ProductTableSeeder::class,
            DiscountTableSeeder::class
        ]);
    }
}
