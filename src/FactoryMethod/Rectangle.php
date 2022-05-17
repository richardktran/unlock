<?php

namespace Khoatran\Unlock\FactoryMethod;

class Rectangle implements PolygonInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "This is rectangle";
    }
}
