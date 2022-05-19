<?php

namespace Khoatran\Unlock\Response;

class Response
{
    /**
     * @param $result
     * @param $statusCode
     * @return false|string
     */
    public static function response($result, $statusCode)
    {
        $response = json_encode($result);
        header('Content-Type: application/json; charset=utf-8');
        http_response_code($statusCode);
        return $response;
    }
}
