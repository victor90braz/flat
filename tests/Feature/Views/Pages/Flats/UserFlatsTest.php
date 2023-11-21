<?php

namespace Tests\Feature\Views\Pages\Flats;

use App\Models\Flat;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserFlatsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_user_flats()
    {
        $user = User::factory()->create();
        $flats = Flat::factory()->count(3)->create(['user_id' => $user->id]);

        $this->actingAs($user);

        $response = $this->get('/flats/user');

        $response->assertStatus(200);

        foreach ($flats as $flat) {
            $response->assertSee($flat->name);
        }

        $response->assertDontSee('No flats found.');
    }

    /** @test */
    public function it_displays_no_flats_message_when_user_has_no_flats()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/flats/user');

        $response->assertStatus(200);

        $response->assertSee('No flats found.');
    }
}
