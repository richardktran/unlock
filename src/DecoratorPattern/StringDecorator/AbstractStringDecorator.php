<?php

namespace Khoatran\Unlock\DecoratorPattern\StringDecorator;

use Khoatran\Unlock\DecoratorPattern\StringFormatInterface;

abstract class AbstractStringDecorator implements StringFormatInterface
{
    protected StringFormatInterface $stringWrapped;
    public function __construct(StringFormatInterface $stringHelpers)
    {
        $this->stringWrapped = $stringHelpers;
    }

    /**
     * @return StringFormatInterface
     */
    public function getStringWrapped(): StringFormatInterface
    {
        return $this->stringWrapped;
    }

    /**
     * @param StringFormatInterface $stringWrapped
     */
    public function setStringWrapped(StringFormatInterface $stringWrapped): void
    {
        $this->stringWrapped = $stringWrapped;
    }
}
