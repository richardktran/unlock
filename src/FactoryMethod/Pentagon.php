<?php

namespace Khoatran\Unlock\FactoryMethod;

class Pentagon implements PolygonInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return "This is pentagon";
    }
}
