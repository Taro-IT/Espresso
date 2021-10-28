<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            'mxn','usd','eur',
        ];

        foreach ($currencies as $currencie){
            Currency::create([
                'iso'=>$currencie,
            ]);
        }
    }
}
