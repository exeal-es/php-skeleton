<?php

namespace Exeal\PhpSkeleton;

use PHPUnit\Framework\TestCase;

class HelloShould extends TestCase
{
    /** @test */
    public function say_hello_to_given_name()
    {
        $hello = new Hello();
        $this->assertEquals('Hello, Pedro!', $hello->salute('Pedro'));
    }
}
