<?php

namespace Tests\Controllers\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_register_with_valid_credentials()
    {
        $response = $this->post('/register', [
            'name' => 'victor',
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/login');
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);
    }
}
