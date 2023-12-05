<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_can_create_a_user()
    {
        $userData = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password123'), // Ensure to bcrypt the password
        ];

        $response = $this->post('/api/register', $userData);

        $response->assertStatus(201); // Assuming you return a 201 status code upon successful user creation

        $this->assertDatabaseHas('users', ['email' => $userData['email']]);
    }

    /** @test */
    public function it_can_get_user_profile()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/api/user');

        $response->assertStatus(200); // Assuming you return a 200 status code for successful requests
        $response->assertJson(['email' => $user->email]);
    }

    // Add more tests for updating, deleting, and other user-related features as needed
}
