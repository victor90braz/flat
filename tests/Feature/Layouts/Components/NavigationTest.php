<?php

namespace Tests\Feature\Layouts\Components;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_navigation_elements_for_authenticated_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/');

        $response->assertSuccessful();
        $response->assertSee('Welcome, ' . ucfirst($user->name));
        $response->assertSee(route('flats.user'));
        $response->assertSee(route('flats.create'));
        $response->assertSee(route('logout'));
    }

    /** @test */
    public function it_displays_navigation_elements_for_guest_user()
    {
        $response = $this->get('/');

        $response->assertSuccessful();
        $response->assertDontSee('Welcome, ');
        $response->assertDontSee(route('flats.user'));
        $response->assertDontSee(route('flats.create'));
        $response->assertDontSee(route('logout'));
    }
}
