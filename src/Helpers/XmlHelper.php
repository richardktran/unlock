<?php

namespace Khoatran\Unlock\Helpers;

trait XmlHelper
{
    /**
     * @param  $path
     * @return \$1|false|\SimpleXMLElement
     */
    public function xml2object($path)
    {
        $xmlString = file_get_contents($path);
        return simplexml_load_string($xmlString);
    }
}
