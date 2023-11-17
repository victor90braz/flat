<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

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

        // Assert that the registration was successful and the user was created
        $response->assertRedirect('/login');
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);

    }

}
