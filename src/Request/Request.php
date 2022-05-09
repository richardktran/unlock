<?php

namespace Khoatran\Unlock\Request;

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        if (!strpos($path, '?')) {
            return $path;
        }
        return substr($path, 0, strpos($path, '?'));
    }

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'] ?? 'GET';
    }
}