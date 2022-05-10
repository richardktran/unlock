<?php

namespace Khoatran\Unlock;

use Khoatran\Unlock\Controllers\NotFoundController;
use Khoatran\Unlock\Request\Request;

class Route
{
    /**
     * @var array
     */
    protected static array $routes = [];

    /**
     * @param  $uri
     * @param  $callback
     * @return void
     */
    public static function get($uri, $callback): void
    {
        if (gettype($callback) == 'object') {
            $response = $callback();
            self::$routes['GET'][$uri] = $response;
            return;
        }
        $service = new $callback[2]();
        $currenController = new $callback[0]($service);
        $action = $callback[1];
        $response = $currenController->$action();
        self::$routes['GET'][$uri] = $response;
    }

    /**
     * @return void
     */
    public static function handle(): void
    {
        $request = new Request();
        $path = $request->getPath();
        $method = $request->getMethod();
        $response = self::$routes[$method][$path] ?? false;
        if (!$response) {
            $notFoundController = new NotFoundController();
            echo $notFoundController->index();
        }
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(200);
        print_r($response);
    }
}
