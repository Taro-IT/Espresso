<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChangePasswordTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_cambio_contresnia()
    {
        $response = $this->get('/hacer-una-donacion');
        $response->assertSuccessful();
        $response->assertViewIs('donations.index');
    }
}
