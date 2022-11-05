<?php

declare(strict_types=1);

namespace Tests\Unit\Fundamentals\GrasshopperCheckForFactor;

use PHPUnit\Framework\TestCase;
use Src\Fundamentals\GrasshopperCheckForFactor\GrasshopperCheckForFactor;

class GrasshopperCheckForFactorTest extends TestCase
{
    /**
     * @dataProvider getValues
     */
    public function testCheckFactor(bool $expect, int $base, int $factor): void
    {
        $this->assertTrue(true);
        $checkFactor = new  GrasshopperCheckForFactor();
        $this->assertSame($expect, $checkFactor->solution($base, $factor));
    }

    public function getValues(): array
    {
        return [
            [true, 10, 2],
            [true, 63, 7],
            [true, 2450, 5],
            [true, 24612, 3],
            [false, 9, 2],
            [false, 653, 7],
            [false, 2453, 5],
            [false, 24617, 3],
        ];
    }
}
