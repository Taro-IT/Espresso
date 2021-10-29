<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ver_todos_los_productos()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->get('/productos');
        $response->assertViewIs('products.index');
    }
}
