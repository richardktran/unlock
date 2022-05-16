<?php

namespace Khoatran\Unlock\DecoratorPattern;

interface StringFormatInterface
{
    public function transform(string $text): string;
}
