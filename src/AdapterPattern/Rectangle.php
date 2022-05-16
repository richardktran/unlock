<?php

namespace Khoatran\Unlock\AdapterPattern;

class Rectangle implements ShapeInterface
{
    /**
     * @return string
     */
    public function draw(): string
    {
        return "Draw rectangle";
    }

    /**
     * @return string
     */
    public function resize(): string
    {
        return "Resize rectangle";
    }
}
