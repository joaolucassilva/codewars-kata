<?php

declare(strict_types=1);

namespace Src\Fundamentals\GrasshopperCheckForFactor;

class GrasshopperCheckForFactor
{
    public function solution(int $base, int $factor): bool
    {
        return $base % $factor === 0;
    }
}
