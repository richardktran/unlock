<?php

namespace Khoatran\Unlock\Helpers;

class XmlHelper
{
    /**
     * @param $path
     * @return \$1|false|\SimpleXMLElement
     */
    public static function xml2object($path)
    {
        $xmlString = file_get_contents($path);
        return simplexml_load_string($xmlString);

    }

    public static function toJson($xmlObjec)
    {
        return json_encode($xmlObjec);
    }
}
