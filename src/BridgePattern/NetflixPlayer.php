<?php

namespace Khoatran\BridgePattern\BridgePattern;

class NetflixPlayer extends MoviePlayer
{
    public function openSubtitle(): void
    {
        $subtitles = $this->translator->translateSubtitle();
        echo "Subtitle translated by Netflix Player";
        foreach ($subtitles as $subtitle) {
            echo $subtitle;
        }
    }
}
