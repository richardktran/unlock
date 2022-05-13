<?php

require './vendor/autoload.php';

use Khoatran\BridgePattern\BridgePattern\FPTPlayer;
use Khoatran\BridgePattern\BridgePattern\NetflixPlayer;
use Khoatran\BridgePattern\BridgePattern\Translator\JapanTranslator;
use Khoatran\BridgePattern\BridgePattern\Translator\VietNamTranslator;
use Khoatran\BridgePattern\WithoutBridgePattern\FPTPlayer as FPTPlayerWithoutBridgePattern;
use Khoatran\BridgePattern\WithoutBridgePattern\NetflixPlayer as NetflixPlayerWithoutBridgePattern;


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
