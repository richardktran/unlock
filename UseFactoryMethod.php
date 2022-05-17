<?php

use Khoatran\Unlock\FactoryMethod\PolygonFactory;

require './vendor/autoload.php';

$triangle = new PolygonFactory();
echo $triangle->getPolygon(3)->getType();
