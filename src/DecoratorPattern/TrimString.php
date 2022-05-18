<?php

namespace Khoatran\Unlock\DecoratorPattern;

class TrimString implements StringHelpers
{
    /**
     * @param string $text
     * @return string
     */
    public function transform(string $text): string
    {
        return trim($text);
    }
}
