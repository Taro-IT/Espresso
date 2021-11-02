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
        $this->call(
            [
                UserSeeder::class,
                PaymentPlataformsTableSeeder::class,
                CurrenciesTableSeeder::class,
                WorkshopSeeder::class,
                ProductSeeder::class,
                PatientSeeder::class,
                PatientProductSeeder::class,
            ]);
    }
}
