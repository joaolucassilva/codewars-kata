<?php

declare(strict_types=1);

namespace Src\Fundamentals\ReverseWords;

class ReverseWords
{
    public function solution(string $words): string
    {
        $words = explode(' ', $words);
        $countWords = count($words);
        $reverseWords = '';
        for ($x = 0; $x < $countWords; $x++) {
            if ($x !== ($countWords - 1)) {
                $reverseWords .= strrev($words[$x]) . ' ';
            } else {
                $reverseWords .= strrev($words[$x]);
            }
        }

        return $reverseWords;
    }
}
