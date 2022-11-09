<?php

declare(strict_types=1);

namespace Tests\Unit\Fundamentals\ReverseWords;

use PHPUnit\Framework\TestCase;
use Src\Fundamentals\ReverseWords\ReverseWords;

class ReverseWordsTest extends TestCase
{
    public function testReturnStringReverse(): void
    {
        $reverseWord = new ReverseWords();
        $this->assertSame(
            expected: 'ehT kciuq nworb xof spmuj revo eht yzal .god',
            actual: $reverseWord->solution(words: 'The quick brown fox jumps over the lazy dog.')
        );
        $this->assertSame('elppa', $reverseWord->solution(words: 'apple'));
        $this->assertSame('a b c d', $reverseWord->solution(words: 'a b c d'));
        $this->assertSame('elbuod  decaps  sdrow', $reverseWord->solution(words: 'double  spaced  words'));
        $this->assertSame('desserts stressed', $reverseWord->solution(words: 'stressed desserts'));
        $this->assertSame('olleh olleh', $reverseWord->solution(words: 'hello hello'));
    }
}
