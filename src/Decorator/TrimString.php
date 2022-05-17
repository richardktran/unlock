<?php

namespace Khoatran\Unlock\Decorator;

class TrimString implements StringFormatInterface
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
