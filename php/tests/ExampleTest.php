<?php

declare(strict_types=1);

namespace Tests;

use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testThatItIsWorking()
    {
        $example = new Example();

        $this->assertTrue($example->isItWorking());
    }
}
