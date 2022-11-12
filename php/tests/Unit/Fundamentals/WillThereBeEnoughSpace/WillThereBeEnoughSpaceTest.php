<?php

declare(strict_types=1);

namespace Tests\Unit\Fundamentals\WillThereBeEnoughSpace;

use PHPUnit\Framework\TestCase;
use Src\Fundamentals\WillThereBeEnoughSpace\WillThereBeEnoughSpace;

class WillThereBeEnoughSpaceTest extends TestCase
{
    public function testHasSpace(): void
    {
        $willThereBeEnoughSpace = new WillThereBeEnoughSpace();
        $this->assertSame(expected: 0, actual: $willThereBeEnoughSpace->solution(20, 5, 5));
        $this->assertSame(expected: 0, actual: $willThereBeEnoughSpace->solution(10, 5, 5));
        $this->assertSame(expected: 10, actual: $willThereBeEnoughSpace->solution(100, 60, 50));
        $this->assertSame(expected: 0, actual: $willThereBeEnoughSpace->solution(98, 77, 11));
    }
}
