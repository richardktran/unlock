<?php

namespace Khoatran\Unlock\BridgePattern;

class FPTPlayer extends MoviePlayer
{
    public function openSubtitle(): void
    {
        $subtitles = $this->translator->translateSubtitle();
        echo "Subtitle translated by FPT Player";
        foreach ($subtitles as $subtitle) {
            echo $subtitle;
        }
    }
}
