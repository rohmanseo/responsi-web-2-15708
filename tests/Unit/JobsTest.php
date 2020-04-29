<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function login()
    {
        $credential = [
            'email'    => 'test@example.net',
            'password' => 'password',
        ];

        $this->json('POST', 'api/login', $credential)
            ->assertStatus(201)
            ->assertJsonStructure([
                'token',
                'user' => [
                    'id',
                    'name',
                    'email',
                    'created_at',
                    'updated_at'
                ]
            ]);
    }
}
