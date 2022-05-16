<?php

namespace Khoatran\Unlock\AdapterPattern;

class Circle implements ShapeInterface
{
    public function draw(): string
    {
        return "Draw circle";
    }

    public function resize(): string
    {
        return "Resize circle";
    }
}
