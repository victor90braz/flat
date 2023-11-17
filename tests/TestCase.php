<?php

namespace Tests;

use App\Calculator;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function it_can_add_two_numbers()
    {
        // Arrange
        $calculator = new Calculator();

        // Act
        $result = $calculator->add(5, 10);

        // Assert
        $this->assertEquals(15, $result);
    }
}
