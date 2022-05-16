<?php

namespace Khoatran\Unlock\AdapterPattern;

class Drawing
{
    /**
     * @var ShapeInterface
     */
    public ShapeInterface $shape;

    public function __construct(ShapeInterface $shape)
    {
        $this->shape = $shape;
    }

    /**
     * @return string
     */
    public function draw(): string
    {
        return $this->shape->draw();
    }
}
