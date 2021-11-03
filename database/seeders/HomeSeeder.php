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
            'whatsapp' =>'5214421370222',
            'phone_1'=>'4422541353',
            'phone_2'=>'4422539374',
            'mobile_1'=>'4425268903',
            'mobile_2'=>'4424231742',
            'facebook'=>'https://www.facebook.com/Casa-de-Medio-Camino-Quer%C3%A9taro-Casa-Loohl-313251725496600',
            'instagram'=>'https://www.instagram.com/casa_loohl/?hl=es-la',
            'spotify'=>'https://open.spotify.com/show/1tB5CIsUPNtc9y0Q7GuqF3?si=GyvAbp1yRQ-q08HLzaI_nw&nd=1',
            'medium'=>'https://medium.com/@Casademediocamino/following',
            'email'=>'contacto@casamediocamino.com',
        ]);
    }
}
