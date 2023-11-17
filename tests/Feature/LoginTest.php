<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_login_with_valid_credentials()
    {
        // Create a user
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123'),
        ]);

        // Attempt to login with valid credentials
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);

        // Assert that the user is redirected to the home page
        $response->assertRedirect('/');

        // Assert that the user is authenticated
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function a_user_cannot_login_with_invalid_credentials()
    {
        // Attempt to login with invalid credentials
        $response = $this->post('/login', [
            'email' => 'nonexistent@example.com',
            'password' => 'invalidpassword',
        ]);

        // Assert that the user is not authenticated
        $this->assertGuest();
    }
}
