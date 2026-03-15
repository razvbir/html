<?php

declare(strict_types=1);

namespace Yiisoft\Html\Tag;

use Yiisoft\Html\Tag\Base\NormalTag;
use Yiisoft\Html\Tag\Base\TagContentTrait;

/**
 * @link https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-abbr-element
 */
final class Abbr extends NormalTag
{
    use TagContentTrait;

    /**
     * @link https://html.spec.whatwg.org/multipage/text-level-semantics.html#attr-abbr-title
     */
    public function title(?string $title): self
    {
        $new = clone $this;
        $new->attributes['title'] = $title;
        return $new;
    }

    protected function getName(): string
    {
        return 'abbr';
    }
}
