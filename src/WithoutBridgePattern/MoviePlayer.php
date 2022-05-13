<?php

namespace Khoatran\Unlock\WithoutBridgePattern;

abstract class MoviePlayer
{
    protected string $name;
    abstract public function openVietNamSubtitle(): void;
    abstract public function openJapanSubtitle(): void;
}
