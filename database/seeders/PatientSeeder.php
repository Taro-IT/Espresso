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
            'name' => 'Sara Ojeda'

        ]);
        DB::table('patient')->insert([
            'name' => 'Francisco Fuerte'

        ]);
        DB::table('patient')->insert([
            'name' => 'Mario Canchola'

        ]);
    }
}
