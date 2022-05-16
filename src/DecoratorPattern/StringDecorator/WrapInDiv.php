<?php

namespace Khoatran\Unlock\DecoratorPattern\StringDecorator;

use Khoatran\Unlock\DecoratorPattern\StringFormatInterface;

class WrapInDiv extends AbstractStringDecorator
{
    public function __construct(StringFormatInterface $stringHelpers)
    {
        parent::__construct($stringHelpers);
    }

    public function transform(string $text): string
    {

        return $this->addDiv($text);
    }

    private function addDiv(string $text): string
    {
        return "<div>" . $text . "</div>";
    }
}
