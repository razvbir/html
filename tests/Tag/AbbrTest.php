<?php

declare(strict_types=1);

namespace Yiisoft\Html\Tests\Tag;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Yiisoft\Html\Tag\Abbr;

final class AbbrTest extends TestCase
{
    public function testBase(): void
    {
        $this->assertSame(
            '<abbr title="Yes It Is!">YII</abbr>',
            (string) (new Abbr())
                ->content('YII')
                ->title('Yes It Is!'),
        );
    }

    public static function dataTitle(): array
    {
        return [
            ['<abbr></abbr>', null],
            ['<abbr title="Yes It Is!"></abbr>', 'Yes It Is!'],
        ];
    }

    #[DataProvider('dataTitle')]
    public function testHref(string $expected, ?string $title): void
    {
        $this->assertSame($expected, (string) (new Abbr())->title($title));
    }

    public function testImmutability(): void
    {
        $tag = new Abbr();
        $this->assertNotSame($tag, $tag->content(''));
        $this->assertNotSame($tag, $tag->title(''));
    }
}
