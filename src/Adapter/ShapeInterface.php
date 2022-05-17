<?php

namespace Khoatran\Unlock\Adapter;

interface ShapeInterface
{
    public function draw(): string;

    public function resize(): string;
}
