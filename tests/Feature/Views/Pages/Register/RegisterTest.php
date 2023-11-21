<?php

namespace Tests\Feature\Views\Pages\Flats;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_registration_form()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        $response->assertSee('Register');
        $response->assertSee('Name');
        $response->assertSee('Email address');
        $response->assertSee('Password');
        $response->assertSee('Sign in');
        $response->assertSee('Already a member?');
        $response->assertSee('Log In!');
    }
}
