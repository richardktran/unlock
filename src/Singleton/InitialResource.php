<?php

namespace Khoatran\Unlock\Singleton;

class InitialResource
{
    public static InitialResource $instance;

    private function __construct()
    {
        $port = 8000;
        $url = "https://richardktran.dev";
        $token = "fsdf878sgds879hgf8e9r8ds";
    }

    /**
     * @return InitialResource
     */
    public static function getInstance(): InitialResource
    {
        if (self::$instance != null) {
            self::$instance = new InitialResource();
        }
        return self::$instance;
    }
}
