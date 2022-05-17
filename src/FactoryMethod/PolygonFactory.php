<?php

namespace Khoatran\Unlock\FactoryMethod;

class PolygonFactory
{
    public function getPolygon(int $numberOfSides): PolygonInterface
    {
        if ($numberOfSides === 3) {
            return new Triangle();
        }
        if ($numberOfSides === 4) {
            return new Rectangle();
        }

        if ($numberOfSides === 5) {
            return new Pentagon();
        }
    }
}
