<?php

namespace Tests\Feature\Routes;

use App\Models\Flat;
use App\Models\Comment;
use App\Models\User;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /** @test */
    public function it_routes_to_home_page()
    {
        $this->get('/')->assertOk();
    }

    /** @test */
    public function it_routes_to_flat_create_page()
    {
        $this->get(route('flats.create'))->assertOk();
    }

    /** @test */
    public function it_routes_to_flat_store_action()
    {
        $user = User::factory()->create(); // Creating a user for authentication (if needed)

        $data = [
            'title' => 'Sample Flat',
            'price' => 1000,
            'description' => 'This is a sample flat description.',
            'location' => 'Sample Location',
        ];

        $response = $this->actingAs($user) // Assuming you want to act as an authenticated user
                        ->post(route('flats.store'), $data);

        // Check if the response is a redirect (status code 302)
        $response->assertStatus(302);

        // Optionally, you can assert that the flat was created in the database
        $this->assertDatabaseHas('flats', [
            'title' => 'Sample Flat',
            'price' => 1000,
            'description' => 'This is a sample flat description.',
            'location' => 'Sample Location',
            'user_id' => $user->id,
        ]);

        // Optionally, you can assert that the session has a success message
        $response->assertSessionHas('success', 'New flat created');
    }

    /** @test */
    public function it_routes_to_user_flats_action()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('flats.user'));

        $response->assertStatus(200);

        $response->assertViewIs('pages.flats.userFlats');

        $response->assertViewHas('flats');
    }
}
