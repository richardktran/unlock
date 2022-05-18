<?php

namespace Khoatran\Unlock\DecoratorPattern\StringDecorator;

use Khoatran\Unlock\DecoratorPattern\StringHelpers;

abstract class StringDecorator implements StringHelpers
{
    protected StringHelpers $stringWrapped;
    public function __construct(StringHelpers $stringHelpers)
    {
        $this->stringWrapped = $stringHelpers;
    }

    /**
     * @return StringHelpers
     */
    public function getStringWrapped(): StringHelpers
    {
        return $this->stringWrapped;
    }

    /**
     * @param StringHelpers $stringWrapped
     */
    public function setStringWrapped(StringHelpers $stringWrapped): void
    {
        $this->stringWrapped = $stringWrapped;
    }


}
