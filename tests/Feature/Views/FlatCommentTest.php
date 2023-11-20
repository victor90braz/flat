<?php

namespace Tests\Feature;

use App\Models\Flat;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FlatCommentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_user_can_post_comment()
    {
        // Arrange
        $flat = Flat::factory()->create();
        $user = User::factory()->create();

        // Act
        $response = $this->actingAs($user)
            ->post(route('flats.comments.store', ['flat' => $flat->id]), [
                'body' => 'This is a test comment.',
            ]);

        // Assert
        $response->assertStatus(302);
        $this->assertDatabaseHas('comments', [
            'flat_id' => $flat->id,
            'user_id' => $user->id,
            'body' => 'This is a test comment.',
        ]);
    }
}
