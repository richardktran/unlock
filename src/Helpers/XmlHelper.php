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

    public function addData2Xml($path, $data): bool
    {
        $oldData = $this->xml2object($path);
        $xml = simplexml_load_file($path);
        $keyData = $xml->getName();
//        $movies = $xml->{$keyData};
        $movie = $xml->addChild('movie');
        foreach ($data as $key => $value) {
            $movie->addChild($key, $value);
        }
        $xml->asXML($path);
        return true;
    }
}
