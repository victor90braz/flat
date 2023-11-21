<?php

namespace Tests\Feature\Routes;

use App\Models\Flat;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        $user = User::factory()->create();
        $data = [
            'title' => 'Sample Flat',
            'price' => 1000,
            'description' => 'This is a sample flat description.',
            'location' => 'Sample Location',
        ];

        $response = $this->actingAs($user)
            ->post(route('flats.store'), $data);

        $response->assertStatus(302);
        $this->assertDatabaseHas('flats', [
            'title' => 'Sample Flat',
            'price' => 1000,
            'description' => 'This is a sample flat description.',
            'location' => 'Sample Location',
            'user_id' => $user->id,
        ]);
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
        $user = User::factory()->create();
        $flat = Flat::factory()->create();

        $data = [
            'body' => 'This is a test comment.',
        ];

        $response = $this->actingAs($user)->post(route('flats.comments.store', ['flat' => $flat->id]), $data);

        $response->assertStatus(302);
        $this->assertDatabaseHas('comments', [
            'user_id' => $user->id,
            'flat_id' => $flat->id,
            'body' => 'This is a test comment.',
        ]);
        $response->headers->get('Location');
    }

    /** @test */
    public function it_routes_to_flat_comment_delete_action()
    {
        $user = User::factory()->create();
        $flat = Flat::factory()->create();
        $comment = Comment::factory()->create(['flat_id' => $flat->id, 'user_id' => $user->id]);

        $response = $this->actingAs($user)
            ->delete(route('flats.comments.delete', ['flat' => $flat->id, 'comment' => $comment->id]));

        $response->assertStatus(302);
        $this->assertDatabaseMissing('comments', ['id' => $comment->id]);
        $response->headers->get('Location');
    }

    /** @test */
    public function it_routes_to_register_create_page()
    {
        $response = $this->get(route('register.create'));

        $response->assertStatus(200)
            ->assertViewIs('pages.register.create');
    }

    /** @test */
    public function it_routes_to_register_store_action()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
        ];

        $response = $this->post(route('register.store'), $data);

        $response->assertStatus(302)
            ->assertRedirect('/login')
            ->assertSessionHas('success', 'Registration successful!');
    }

    /** @test */
    public function it_routes_to_login_create_action()
    {
        $response = $this->get(route('login.create'));

        $response->assertStatus(200)
            ->assertViewIs('pages.login.index');
    }

    /** @test */
    public function it_logs_in_user_with_valid_credentials()
    {
        $validCredentials = [
            'name' => 'John Doe',
            'email' => 'valid@example.com',
            'password' => bcrypt('validpassword'),
        ];

        $user = User::create($validCredentials);

        $response = $this->post(route('login.store'), [
            'email' => 'valid@example.com',
            'password' => 'validpassword',
        ]);

        $response->assertRedirect('/')
            ->assertSessionHas('success', 'Welcome Back!');

        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function it_does_not_log_in_user_with_invalid_credentials()
    {
        $invalidCredentials = [
            'email' => 'invalid@example.com',
            'password' => 'invalidpassword',
        ];

        $response = $this->post(route('login.store'), $invalidCredentials);

        $response->assertRedirect(route('login.create'))
            ->assertSessionHasErrors('email', 'Invalid login credentials. Please try again.');

        $this->assertGuest();
    }

    /** @test */
    public function it_logs_out_authenticated_user()
    {
        $user = User::factory()->create();
        Auth::login($user);

        $response = $this->get(route('logout'));

        $response->assertRedirect('/')
            ->assertSessionHas('success', 'You have been successfully logged out. See you next time!');

        $this->assertGuest();
    }
}
