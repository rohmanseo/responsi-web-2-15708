<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * @test
     *
     * Login Test
     */
    public function login_test()
    {
        $credential = [
            'email'    => 'test@example.net',
            'password' => 'password',
        ];

        $this->json('POST', '/api/auth/login', $credential)
            ->assertStatus(200)
            ->assertJsonStructure([
                'access_token',
                'token_type',
                'expires_in'
            ]);
    }
}
