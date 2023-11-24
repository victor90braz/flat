<?php

namespace Tests\Feature\Views\Components\Search;

use App\Models\Flat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImagesCollectionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_images_correctly()
    {
        $flat = Flat::factory()->create();
        $images = [
            'https://plus.unsplash.com/premium_photo-1680100256112-2e1231d9d0df?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ];

        $response = $this->get(route('flats.view', ['flat' => $flat->id]));

        foreach ($images as $image) {
            $response->assertSee($image);
        }
    }
}
