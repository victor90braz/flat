<?php

namespace Tests\Feature\Views\Components\Flats;

use App\Models\Flat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_flat_information()
    {
        // Arrange
        $flat = Flat::factory()->create([
            'title' => 'Spacious City Flat',
            'price' => 1500,
            'updated_at' => now()->subDays(3),
        ]);

        // Act
        $response = $this->get(route('flats.view', ['flat' => $flat]));

        // Assert
        $response->assertSee('Spacious City Flat');
        $response->assertSee('EUR 1500/month');
    }

}
