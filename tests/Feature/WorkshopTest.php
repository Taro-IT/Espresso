<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Workshop;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WorkshopTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ver_todos_los_talleres()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->get('/talleres');
        $response->assertViewIs('workshops.index');
    }


    public function test_admin_sube_un_taller()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->post('/almacenar-talleres', [
            'name' => 1,
            'description' => 1,
            'image' => '/image-test',
        ]);

        $response->assertRedirect('/talleres');
    }

    public function test_eliminar_taller()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->post('/almacenar-talleres', [
            'name' => 1,
            'description' => 1,
            'image' => '/image-test',
        ]);

        $lastWorkShop = Workshop::get()->last();
        $response = $this->actingAs($user)->delete('/talleres-eliminar/' . $lastWorkShop->id);
        $response->assertRedirect('/talleres');


    }

    public function test_editar_taller()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->post('/almacenar-talleres', [
            'name' => 1,
            'description' => 1,
            'image' => '/image-test',
        ]);

        $lastProduct = Workshop::get()->last();
        $response = $this->actingAs($user)->put('/actualizar-talleres/' . $lastProduct->id, [
            'name' => 'Test Edit',
            'description' => 'test Edit',
            'image' => '/image-test'
        ]);
        $response->assertRedirect('/talleres');

    }
}
