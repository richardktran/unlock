<?php

use Khoatran\Unlock\FactoryMethod\PolygonFactoryMethod;

require './vendor/autoload.php';

$triangle = new PolygonFactoryMethod();
echo $triangle->getPolygon(3)->getType();
