<?php

namespace Tests\Feature\Layouts\Components;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_navigation_elements()
    {
        // Act
        $response = $this->get('/'); // Adjust the URL based on your application's routes

        // Assert
        $response->assertSee('Home');
        $response->assertSee('Welcome'); // Adjust based on your actual welcome message
        $response->assertDontSee('My Flats'); // Navigation elements for authenticated users
        $response->assertDontSee('New Flat');
        $response->assertDontSee('Logout');
    }

    /** @test */
    public function it_displays_navigation_elements_for_authenticated_user()
    {
        // Arrange
        $user = User::factory()->create();

        // Act
        $response = $this->actingAs($user)->get('/'); // Adjust the URL based on your application's routes

        // Assert
        $response->assertSee('Home');
        $response->assertSee('Welcome, ' . ucfirst($user->name));
        $response->assertSee('My Flats');
        $response->assertSee('New Flat');
        $response->assertSee('Logout');
    }
}
