<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Flat;
use App\Models\Response;

class FlatTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_displays_a_list_of_flats_on_index()
    {
        Flat::factory(5)->create();

        $response = $this->get('/');

        $response->assertStatus(Response::HTTP_OK);

        $response->assertViewIs('pages.flats.index');
        $response->assertViewHas('flats');
    }
}
