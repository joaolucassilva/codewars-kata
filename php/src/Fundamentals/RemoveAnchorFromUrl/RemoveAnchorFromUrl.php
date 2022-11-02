<?php

declare(strict_types=1);

namespace Src\Fundamentals\RemoveAnchorFromUrl;

class RemoveAnchorFromUrl
{
    public function solution(string $value): string
    {
        return explode('#', $value)[0];
    }
}
