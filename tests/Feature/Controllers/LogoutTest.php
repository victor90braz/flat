<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_logout()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/logout');

        $response->assertRedirect('/');
    }
}
