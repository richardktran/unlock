<?php

namespace Khoatran\BridgePattern\WithoutBridgePattern;

abstract class MoviePlayer
{
    protected string $name;
    abstract public function openVietNamSubtitle(): void;
    abstract public function openJapanSubtitle(): void;
}
