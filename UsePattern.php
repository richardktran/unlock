<?php
require './vendor/autoload.php';

use Khoatran\Unlock\BridgePattern\FPTPlayer;
use Khoatran\Unlock\BridgePattern\NetflixPlayer;
use Khoatran\Unlock\BridgePattern\Translator\JapanTranslator;
use Khoatran\Unlock\BridgePattern\Translator\VietNamTranslator;
use Khoatran\Unlock\WithoutBridgePattern\FPTPlayer as FPTPlayerWithoutBridgePattern;
use Khoatran\Unlock\WithoutBridgePattern\NetflixPlayer as NetflixPlayerWithoutBridgePattern;


// Without using Bridge Pattern
$netflixPlayerWithoutBridgePattern = new FPTPlayerWithoutBridgePattern();
$netflixPlayerWithoutBridgePattern->openVietNamSubtitle();

$fptPlayerWithoutBridgePattern = new NetflixPlayerWithoutBridgePattern();
$fptPlayerWithoutBridgePattern->openJapanSubtitle();


//Using Bridge Pattern
$netflixPlayer = new NetflixPlayer(new VietNamTranslator());
$netflixPlayer->openSubtitle();

$fptPlayer = new FPTPlayer(new JapanTranslator());
$fptPlayer->openSubtitle();
