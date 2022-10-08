<?php

namespace KesDev\ComposerPackageSkeleton\Tests\Unit;

use KesDev\ComposerPackageSkeleton\Simple\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testFailure(): void
    {
        $example = new Example;
        $this->assertGreaterThan($example->numbers(1), 3);
    }
}
