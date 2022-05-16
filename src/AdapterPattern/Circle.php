<?php

namespace Khoatran\Unlock\AdapterPattern;

class Circle implements ShapeInterface
{
    /**
     * @return string
     */
    public function draw(): string
    {
        return "Draw circle";
    }

    /**
     * @return string
     */
    public function resize(): string
    {
        return "Resize circle";
    }
}
