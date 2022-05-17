<?php

namespace Khoatran\Unlock\Decorator;

interface StringFormatInterface
{
    public function transform(string $text): string;
}
