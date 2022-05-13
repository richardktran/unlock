<?php

namespace Khoatran\BridgePattern\BridgePattern\Translator;

class VietNamTranslator implements Translator
{
    public function translateSubtitle(): array
    {
        return ['Xin chào', "Bạn có khỏe không"];
    }
}
