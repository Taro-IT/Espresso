<?php

namespace Tests\Feature;

use App\Models\products;
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


    public function test_admin_sube_un_producto()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->post('/almacenar-productos', [
            'id_patient' => 1,
            'id_workshop' => 1,
            'title' => 'Test',
            'description' => 'test',
            'price' => 208000
        ]);

        $response->assertRedirect('/productos');
    }

    public function test_eliminar_producto()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->post('/almacenar-productos', [
            'id_patient' => 1,
            'id_workshop' => 1,
            'title' => 'Test',
            'description' => 'test',
            'price' => 208000
        ]);

        $lastProduct = products::get()->last();
        $response = $this->actingAs($user)->delete('/productos-eliminar/'.$lastProduct->id);
        $response->assertRedirect('/productos');


    }

    public function test_editar_producto()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->post('/almacenar-productos', [
            'id_patient' => 1,
            'id_workshop' => 1,
            'title' => 'Test',
            'description' => 'test',
            'price' => 208000
        ]);

        $lastProduct = products::get()->last();
        $response = $this->actingAs($user)->put('/actualizar-productos/'.$lastProduct->id,[
            'title' => 'Test Edit',
            'description' => 'test Edit',
            'price' => 0
        ]);
        $response->assertRedirect('/productos');


    }
}
