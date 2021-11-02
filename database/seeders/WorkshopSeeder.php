<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workshop')->insert([
            'name' => 'Pintura'

        ]);
        DB::table('workshop')->insert([
            'name' => 'Radio'

        ]);
        DB::table('workshop')->insert([
            'name' => 'Documental'

        ]);

    }
}
