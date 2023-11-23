<?php

namespace Tests\Feature\Views\Components\Search;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FlatTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_search_form()
    {
        $response = $this->get('/'); // Update the URL based on your route

        $response->assertSuccessful();
        $response->assertSee('<form action="#" method="GET">', false);
        $response->assertSee('<input type="text" name="search" class="rounded-md px-3 py-1.5"', false);
        $response->assertSee('<button type="submit" class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500', false);
        $response->assertSee('Search', false);
    }
}
