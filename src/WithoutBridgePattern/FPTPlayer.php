<?php

namespace Khoatran\BridgePattern\WithoutBridgePattern;

class FPTPlayer extends MoviePlayer
{
    protected VietNamTranslator $vietNamMovie;
    protected JapanTranslator $japanMovie;
    public function __construct()
    {
        $this->name = 'FPT Player';
        $this->vietNamMovie = new VietNamTranslator();
        $this->japanMovie = new JapanTranslator();
    }

    public function openVietNamSubtitle(): void
    {
        $subtitles = $this->vietNamMovie->translateSubtitle();
        echo "Subtitle translated by " . $this->name;
        foreach ($subtitles as $subtitle) {
            echo $subtitle;
        }
    }

    public function openJapanSubtitle(): void
    {
        $subtitles = $this->japanMovie->translateSubtitle();
        echo "Subtitle translated by " . $this->name;
        foreach ($subtitles as $subtitle) {
            echo $subtitle;
        }
    }
}
