<?php

namespace Tests\Feature\Views\Pages\Flats;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_create_flat_form()
    {
        // Arrange
        $user = User::factory()->create();
        $this->actingAs($user);

        // Act
        $response = $this->get(route('flats.create'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('pages.flats.create');
        $response->assertSee('New Card Flat');
        $response->assertSee('TITLE');
        $response->assertSee('Price');
        $response->assertSee('DESCRIPTION');
        $response->assertSee('LOCATION');
        $response->assertSee('Create');
        $response->assertSee('Cancel');
        $response->assertSee('Back to Home Page!');
    }
}
