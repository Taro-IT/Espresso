<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patient')->insert([
            'name' => 'Pedro Picapiedra'

        ]);
        DB::table('patient')->insert([
            'name' => 'Elcerresiete'

        ]);
        DB::table('patient')->insert([
            'name' => 'El Nubes'

        ]);
    }
}
