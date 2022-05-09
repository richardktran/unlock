<?php
require 'vendor/autoload.php';
require 'src/routes.php';

use Khoatran\Unlock\Application;

$app = new Application();

$app->run();

