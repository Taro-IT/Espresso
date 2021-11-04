<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ver_pagina_informacion_general()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->get('/home');
        $response->assertViewIs('home');
    }


    public function test_admin_actualiza_informacion()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->put('/actualizar-home', [
            'whatsapp' => '4274277211',
            'phone_1' => '1341383',
            'phone_2' => '1341383',
            'mobile_1' => '4274277211',
            'mobile_2' => '4274277211',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'spotify' => 'https://www.spotify.com/mx/',
            'medium' => 'https://medium.com/',
            'email' => 'espresso@gmail.com',
        ]);

        $response->assertRedirect('/home');
    }
}
