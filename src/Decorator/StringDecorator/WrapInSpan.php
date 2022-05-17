<?php

namespace Khoatran\Unlock\Decorator\StringDecorator;

class WrapInSpan
{
    /**
     * @param string $text
     * @return string
     */
    public function transform(string $text): string
    {
        return $this->addSpan($text);
    }

    /**
     * @param string $text
     * @return string
     */
    private function addSpan(string $text): string
    {
        return "<span>" . $text . "</span>";
    }
}
