<?php

namespace Tests\Feature\Controllers;

use App\Models\Experience;
use App\Models\Response;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_can_get_user_profile()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/api/user');

        $response->assertStatus(Response::HTTP_OK);
        $response->assertJson(['email' => $user->email]);
    }
}
