<?php

use Khoatran\Unlock\Controllers\ContactController;
use Khoatran\Unlock\Controllers\HomeController;
use Khoatran\Unlock\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


