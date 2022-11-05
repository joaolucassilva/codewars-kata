<?php

declare(strict_types=1);

namespace Src\Fundamentals\ReturningStrings;

class ReturningStrings
{
    public function solution(string $name): string
    {
        return "Hello, {$name} how are you doing today?";
    }
}
