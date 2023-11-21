<?php

namespace Tests\Feature\Views\Pages\Flats;

use App\Models\Flat;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_edit_flat_form()
    {
        // Arrange
        $user = User::factory()->create();
        $flat = Flat::factory()->create(['user_id' => $user->id]);
        $this->actingAs($user);

        // Act
        $response = $this->get(route('flats.edit', ['flat' => $flat->id]));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('pages.flats.edit');
        $response->assertSee('Edit Card Flat');
        $response->assertSee('TITLE');
        $response->assertSee('Price');
        $response->assertSee('DESCRIPTION');
        $response->assertSee('LOCATION');
        $response->assertSee('Edit');
        $response->assertSee('Cancel');
        $response->assertSee('Back to Home Page!');
        $response->assertSee($flat->title);
        $response->assertSee((string)$flat->price);
        $response->assertSee($flat->description);
        $response->assertSee($flat->location);
    }
}
