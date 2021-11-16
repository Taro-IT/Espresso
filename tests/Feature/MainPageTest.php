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

    public function test_pagina_quienes_somos_filosofia()
    {
        $response = $this->get('/quienes-somos#philosophy');

        $response->assertStatus(200);
    }
    public function test_pagina_quienes_somos_historia()
    {
        $response = $this->get('/quienes-somos#history');

        $response->assertStatus(200);
    }

    public function test_pagina_que_hacemos()
    {
        $response = $this->get('/que-hacemos');

        $response->assertStatus(200);
    }

    public function test_pagina_que_hacemos_wow()
    {
        $response = $this->get('/que-hacemos#wow');

        $response->assertStatus(200);
    }

    public function test_pagina_que_hacemos_servicios()
    {
        $response = $this->get('/que-hacemos#services');

        $response->assertStatus(200);
    }

    public function test_pagina_que_hacemos_actividades()
    {
        $response = $this->get('/que-hacemos#activities');

        $response->assertStatus(200);
    }

    public function test_pagina_que_hacemos_faq()
    {
        $response = $this->get('/que-hacemos#faq');

        $response->assertStatus(200);
    }

    public function test_seccion_contribuir()
    {
        $response = $this->get('/#contribute');

        $response->assertStatus(200);
    }

    public function test_seccion_contacto()
    {
        $response = $this->get('/#contact');

        $response->assertStatus(200);
    }

    public function test_pagina_puntos_de_venta()
    {
        $response = $this->get('/puntos-venta');

        $response->assertStatus(200);
    }

    public function test_pagina_tienda()
    {
        $response = $this->get('/tienda');

        $response->assertStatus(200);
    }

    public function test_pagina_donaciones()
    {
        $response = $this->get('/hacer-una-donacion');

        $response->assertStatus(200);
    }





}
