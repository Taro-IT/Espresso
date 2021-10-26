<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Espresso',
            'email' => 'espresso@test.com',
            'email_verified_at' => null,
            'password' => Hash::make('secret'),
            'remember_token' => null,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
    }
}
