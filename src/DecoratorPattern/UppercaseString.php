<?php

namespace Khoatran\Unlock\DecoratorPattern;

class UppercaseString implements StringHelpers
{
    /**
     * @param string $text
     * @return string
     */
    public function transform(string $text): string
    {
        return strtoupper($text);
    }
}
