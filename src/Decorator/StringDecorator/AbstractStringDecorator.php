<?php

namespace Khoatran\Unlock\Decorator\StringDecorator;

use Khoatran\Unlock\Decorator\StringFormatInterface;

abstract class AbstractStringDecorator implements StringFormatInterface
{
    /**
     * @var StringFormatInterface
     */
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
