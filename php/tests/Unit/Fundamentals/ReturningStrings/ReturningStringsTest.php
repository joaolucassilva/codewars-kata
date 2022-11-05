<?php

declare(strict_types=1);

namespace Tests\Unit\Fundamentals\ReturningStrings;

use PHPUnit\Framework\TestCase;
use Src\Fundamentals\ReturningStrings\ReturningStrings;

class ReturningStringsTest extends TestCase
{
    public function testReturnString(): void
    {
        $name = 'Ryan';
        $returningStrings = new ReturningStrings();
        $this->assertSame(
            expected: "Hello, {$name} how are you doing today?",
            actual: $returningStrings->solution($name)
        );
    }
}
