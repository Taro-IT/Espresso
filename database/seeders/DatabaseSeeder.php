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
                PatientSeeder::class,
                ProductSeeder::class,
                PatientProductSeeder::class,
                HomeSeeder::class,
            ]);
    }
}
