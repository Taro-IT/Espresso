<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MainPageTest extends TestCase
{
    public function test_pagina_principal()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_pagina_quienes_somos()
    {
        $response = $this->get('/quienes-somos');

        $response->assertStatus(200);
    }

    public function test_pagina_medium()
    {
        $response = $this->get('/medium');

        $response->assertStatus(200);
    }




}
