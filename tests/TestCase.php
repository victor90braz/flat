<?php

namespace Tests;

use App\Calculator;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function it_can_add_two_numbers()
    {
        $calculator = new Calculator();

        $result = $calculator->add(5, 10);

        $this->assertEquals(15, $result);
    }
}
