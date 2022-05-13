<?php

namespace Khoatran\BridgePattern\BridgePattern\Translator;

class JapanTranslator implements Translator
{
    public function translateSubtitle(): array
    {
        return ['こんにちは', '元気ですか？'];
    }
}
