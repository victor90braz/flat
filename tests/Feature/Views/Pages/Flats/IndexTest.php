<?php

namespace Tests\Feature\Views\Pages\Flats;

use App\Models\Flat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_flats_on_index_page()
    {
        $flats = Flat::factory()->count(5)->create();

        $response = $this->get('/');

        $response->assertStatus(200);

        foreach ($flats as $flat) {
            $response->assertSee($flat->name);
        }
    }

    /** @test */
    public function it_displays_no_flats_message_when_no_flats_exist()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSee('No flats found.');
    }
}
