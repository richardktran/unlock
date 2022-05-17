<?php

require './vendor/autoload.php';

use Khoatran\Unlock\Adapter\CircleAdapter;
use Khoatran\Unlock\Adapter\DrawingAdapter;

$drawing = new DrawingAdapter(new CircleAdapter());
echo $drawing->draw();
