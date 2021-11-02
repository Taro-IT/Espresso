<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'id_workshop' => 1,
            'title' => 'Libro de Prueba',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 1,
            'image' => '/var/folders/3n/8_lw500x30dc1b3s38dsnxd00000gp/T/6a83643674c3f8f7a2745c9f3ed29529.png'

        ]);
        DB::table('product')->insert([
            'id_workshop' => 2,
            'title' => 'Podcast de Prueba',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 10,
            'image' => '/var/folders/3n/8_lw500x30dc1b3s38dsnxd00000gp/T/6a83643674c3f8f7a2745c9f3ed29529.png'

        ]);
        DB::table('product')->insert([
            'id_workshop' => 3,
            'title' => 'Video de Prueba',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 56,
            'image' => '/var/folders/3n/8_lw500x30dc1b3s38dsnxd00000gp/T/6a83643674c3f8f7a2745c9f3ed29529.png'

        ]);
    }
}
