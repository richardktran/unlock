<?php

namespace Khoatran\Unlock\DecoratorPattern\StringDecorator;

use Khoatran\Unlock\DecoratorPattern\StringHelpers;

class WrapInDiv extends StringDecorator
{
    public function __construct(StringHelpers $stringHelpers)
    {
        parent::__construct($stringHelpers);
    }

    public function transform(string $text): string
    {

        return $this->addDiv($text);
    }

    private function addDiv(string $text): string
    {
        return "<div>". $text. "</div>";
    }
}
