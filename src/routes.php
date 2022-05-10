<?php

use Khoatran\Unlock\Controllers\ContactController;
use Khoatran\Unlock\Controllers\MovieController;
use Khoatran\Unlock\Route;
use Khoatran\Unlock\Services\Business\MovieService;

Route::get('/', [MovieController::class, 'index', MovieService::class]);
//Route::get('/contact', [ContactController::class, 'index']);
