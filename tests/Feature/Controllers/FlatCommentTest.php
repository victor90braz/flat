<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Flat;
use App\Models\User;
use App\Models\Comment;

class FlatCommentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_stores_a_comment_for_a_flat()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $flat = Flat::factory()->create();

        $response = $this->post(route('flats.comments.store', $flat), [
            'body' => 'This is a test comment.',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('comments', [
            'user_id' => $user->id,
            'flat_id' => $flat->id,
            'body' => 'This is a test comment.',
        ]);
    }

    /** @test */
    public function it_deletes_a_comment_for_a_flat()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $flat = Flat::factory()->create();
        $comment = Comment::factory()->create([
            'user_id' => $user->id,
            'flat_id' => $flat->id,
        ]);

        $response = $this->delete(route('flats.comments.delete', ['flat' => $flat, 'comment' => $comment]));

        $response->assertStatus(302);

        $this->assertDatabaseMissing('comments', [
            'id' => $comment->id,
        ]);
    }
}
