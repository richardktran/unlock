<?php

namespace Khoatran\Unlock\FactoryMethod;

class Triangle implements PolygonInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "This is triangle";
    }
}
