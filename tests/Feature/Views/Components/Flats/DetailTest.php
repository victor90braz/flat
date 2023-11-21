<?php

namespace Tests\Feature\Views\Pages\Flats;

use App\Models\Flat;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DetailTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_flat_details()
    {
        $user = User::factory()->create();
        $flat = Flat::factory()->create(['user_id' => $user->id]);

        $this->actingAs($user);

        $response = $this->get(route('flats.view', ['flat' => $flat->id]));

        $response->assertStatus(200);

        $response->assertSee(ucwords($flat->title));
        $response->assertSee('EUR');
        $response->assertSee('month');
        $response->assertSee($flat->description);
        $response->assertSee('Location: ' . $flat->location);
    }
}
