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

    /** @test */
    public function it_routes_to_flat_view_action()
    {
        $flat = Flat::factory()->create();

        $response = $this->get(route('flats.view', ['flat' => $flat]));

        $response->assertStatus(200);

        $response->assertViewIs('pages.flats.detail');

        $response->assertViewHas('flat', $flat);
        $response->assertViewHas('comments', $flat->comments);
    }

    /** @test */
    public function it_routes_to_flat_delete_action()
    {
        $flat = Flat::factory()->create();

        $response = $this->delete(route('flats.delete', ['flat' => $flat]));

        $response->assertStatus(302);

        $this->assertDatabaseMissing('flats', ['id' => $flat->id]);

        $response->assertSessionHas('success', 'The item was successfully deleted.');
    }

    /** @test */
    public function it_routes_to_flat_edit_action()
    {
        $flat = Flat::factory()->create();

        $response = $this->get(route('flats.edit', ['flat' => $flat]));

        $response->assertStatus(200);

        $response->assertViewIs('pages.flats.edit');

        $response->assertViewHas('flat', $flat);
    }


    /** @test */
    public function it_routes_to_flat_update_action()
    {
        $flat = Flat::factory()->create();

        $data = [
            'title' => 'Updated Flat Title',
            'price' => 1500,
            'description' => 'Updated flat description.',
            'location' => 'Updated Location',
        ];

        $response = $this->patch(route('flats.update', ['flat' => $flat]), $data);

        $response->assertStatus(302);

        $this->assertDatabaseHas('flats', [
            'id' => $flat->id,
            'title' => 'Updated Flat Title',
            'price' => 1500,
            'description' => 'Updated flat description.',
            'location' => 'Updated Location',
        ]);

        $response->assertSessionHas('success', 'Flat updated successfully!');
    }

    /** @test */
    public function it_routes_to_flat_comment_store_action()
    {
        $user = User::factory()->create(); // Creating a user for testing
        $flat = Flat::factory()->create(); // Creating a flat for testing

        $data = [
            'body' => 'This is a test comment.',
        ];

        $response = $this->actingAs($user) // Assume an authenticated user
                        ->post(route('flats.comments.store', ['flat' => $flat->id]), $data);

        // Check if the response is a redirect (status code 302)
        $response->assertStatus(302);

        // Optionally, you can assert that the comment was created in the database
        $this->assertDatabaseHas('comments', [
            'user_id' => $user->id,
            'flat_id' => $flat->id,
            'body' => 'This is a test comment.',
        ]);

        $response->headers->get('Location');
    }
}
