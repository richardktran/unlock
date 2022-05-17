<?php

require './vendor/autoload.php';

use Khoatran\Unlock\Decorator\StringDecorator\WrapInDiv;
use Khoatran\Unlock\Decorator\TrimString;

$string = "      Hello, My name is Khoa         ";

$formatString = new WrapInDiv(new TrimString());

echo $formatString->transform($string);
