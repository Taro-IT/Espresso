<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patient_product')->insert([
            'id_product' => 1,
            'id_patient' => 1

        ]);
        DB::table('patient_product')->insert([
            'id_product' => 2,
            'id_patient' => 2

        ]);
        DB::table('patient_product')->insert([
            'id_product' => 3,
            'id_patient' => 3

        ]);
    }
}
