<?php

declare(strict_types=1);

namespace Tests\Unit\Fundamentals\RemoveAnchorFromUrl;

use PHPUnit\Framework\TestCase;
use Src\Fundamentals\RemoveAnchorFromUrl\RemoveAnchorFromUrl;

/**
 * It returns the url with anything after the anchor(#) removed.
 */
class RemoveAnchorFromUrlTest extends TestCase
{
    private RemoveAnchorFromUrl $removeAnchorFromUrl;

    protected function setUp(): void
    {
        parent::setUp();
        $this->removeAnchorFromUrl = new RemoveAnchorFromUrl();
    }

    /**
     * @dataProvider getValues()
     */
    public function testRemoveAnchor($expect, $value): void
    {
        $this->assertSame($expect, $this->removeAnchorFromUrl->solution($value));
    }

    public function getValues(): array
    {
        return [
            ['https://www.uol.com.br', 'https://www.uol.com.br#teste'],
            ['www.google.com', 'www.google.com'],
            ['www.ig.com.br', 'www.ig.com.br'],
            ['abc', 'abc#d'],
            ['www.attser.com', 'www.attser.com'],
            ['www.indio.com', 'www.indio.com#flecha'],
        ];
    }
}
