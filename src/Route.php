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

        $currenController = (new $callback[0]);
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
        $notFoundController = new NotFoundController();
        $path = $request->getPath();
        $method = $request->getMethod();
        $response = self::$routes[$method][$path] ?? false;
        if (!$response) {
            echo $notFoundController->index();
        }

        print_r($response);

    }
}

