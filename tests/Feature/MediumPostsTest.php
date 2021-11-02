<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class MediumPostsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_obtener_posts_medium()
    {
        $response = $this->get('/medium');
        $response->assertStatus(200);
        $response->assertJsonStructure([ 
            'items' => [
                '*' => [
                    'title',
                    'link', 
                    'author',
                    'thumbnail',
                ]
            ]
        ]);
    }
}
