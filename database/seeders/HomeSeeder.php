<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'name' => 'Casa de Medio Camino',
            'email' => 'casa_de_medio@test.com',
            'phone'=>'4274277200'
        ]);
    }
}
