<?php

namespace Tests\Feature\Views\Pages\Flats;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Log In!');
        $response->assertSee('Email address');
        $response->assertSee('Password');
        $response->assertSee('Sign in');
        $response->assertSee('Not a member?');
        $response->assertSee('Register');
    }
}
