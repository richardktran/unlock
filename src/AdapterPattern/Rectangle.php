<?php

namespace Khoatran\Unlock\AdapterPattern;

class Rectangle implements ShapeInterface
{
    public function draw(): string
    {
        return "Draw rectangle";
    }

    public function resize(): string
    {
        return "Resize rectangle";
    }
}
