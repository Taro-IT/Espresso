<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ver_todos_los_imagenes()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->get('/imagenes');
        $response->assertViewIs('images.index');
    }


    public function test_admin_sube_un_taller()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->post('/almacenar-imagenes', [
            'image' => '/image-test',
        ]);

        $response->assertRedirect('/imagenes');
    }

    public function test_eliminar_taller()
    {
        $user = User::factory(User::class)->make();
        $response = $this->actingAs($user)->post('/almacenar-imagenes', [
            'image' => '/image-test',
        ]);

        $lastImage = Image::get()->last();
        $response = $this->actingAs($user)->delete('/imagenes-eliminar/' . $lastImage->id);
        $response->assertRedirect('/imagenes');


    }
}
