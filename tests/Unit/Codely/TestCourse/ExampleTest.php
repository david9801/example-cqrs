<?php

namespace Tests\Unit\Codely\TestCourse;

use App\Services\Implementation\Codely\TestingCourse\TestingClass;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_fizz_buzz()
    {
        $testingClass = new TestingClass();
        $this->assertEquals(1, $testingClass->fizzbuzz(1));
        $this->assertEquals('Fizz', $testingClass->fizzbuzz(3));
        $this->assertEquals('Buzz', $testingClass->fizzbuzz(5));
        $this->assertEquals('FizzBuzz', $testingClass->fizzbuzz(15));
    }
}
