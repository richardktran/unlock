<?php

use Khoatran\Unlock\Facade\ComputerFacade;

require './vendor/autoload.php';

$myComputer = new ComputerFacade();

echo $myComputer->getInfo();
