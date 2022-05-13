<?php

namespace Khoatran\Unlock\BridgePattern;

use Khoatran\Unlock\BridgePattern\Translator\Translator;

abstract class MoviePlayer
{
    protected Translator $translator;
    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

    abstract public function openSubtitle(): void;
}
