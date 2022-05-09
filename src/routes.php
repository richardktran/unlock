<?php

use Khoatran\Unlock\Controller\ContactController;
use Khoatran\Unlock\Controller\HomeController;
use Khoatran\Unlock\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);