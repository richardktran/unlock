<?php

namespace Khoatran\Unlock\DecoratorPattern;

class UppercaseString implements StringFormatInterface
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
