<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Flat;

class FlatControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_displays_a_list_of_flats_on_index()
    {
        // Create some flats in the database
        Flat::factory(5)->create();

        // Make a GET request to the index method
        $response = $this->get('/');

        // Assert that the response has a successful status code
        $response->assertStatus(200);

        // Assert that the flats are displayed on the page
        $response->assertViewIs('pages.flats.index');
        $response->assertViewHas('flats');
    }


}
