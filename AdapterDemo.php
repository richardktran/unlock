<?php

require './vendor/autoload.php';
use Khoatran\Unlock\AdapterPattern\Circle;
use Khoatran\Unlock\AdapterPattern\Drawing;
$drawing = new Drawing(new Circle());
echo $drawing->draw();
