<?php

namespace Khoatran\Unlock\DecoratorPattern\StringDecorator;

class WrapInSpan
{
    public function transform(string $text): string
    {
        return $this->addSpan($text);
    }

    private function addSpan(string $text): string
    {
        return "<span>". $text. "</span>";
    }
}
