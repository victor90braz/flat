<?php

namespace Tests\Feature\Requests\StoreFlatRequest;

use App\Http\Requests\StoreFlatRequest;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreFlatRequestTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_passes_validation_with_valid_data()
    {
        $user = User::factory()->create();

        $data = [
            'title' => 'Sample Flat',
            'price' => 1000,
            'description' => 'This is a sample flat description.',
            'location' => 'Sample Location',
        ];

        $response = $this->actingAs($user)->post(route('flats.store'), $data);

        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
    }

    /** @test */
    public function it_fails_validation_with_missing_required_data()
    {
        $data = [
            // Missing 'title', 'price', 'description', 'location'
        ];

        $response = $this->post(route('flats.store'), $data);

        $response->assertSessionHasErrors(['title', 'price', 'description', 'location']);
        $response->assertStatus(302);
    }

    /** @test */
    public function it_fails_validation_with_invalid_data()
    {
        $data = [
            'title' => 'Sample Flat',
            'price' => 'not_a_number', // Invalid data type for 'price'
            'description' => 'This is a sample flat description.',
            'location' => 'Sample Location',
        ];

        $response = $this->post(route('flats.store'), $data);

        $response->assertSessionHasErrors('price');
        $response->assertStatus(302); // Assuming a redirect after failed validation
    }
}
