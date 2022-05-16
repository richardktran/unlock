<?php
require './vendor/autoload.php';

use Khoatran\Unlock\DecoratorPattern\StringDecorator\WrapInDiv;
use Khoatran\Unlock\DecoratorPattern\TrimString;

$string = "      Hello, My name is Khoa         ";

$formatString = new WrapInDiv(new TrimString());

echo $formatString->transform($string);
