<?php

namespace Tests\Feature\Views\Components\Comments;

use Tests\TestCase;

class FlatCommentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
