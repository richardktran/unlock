<?php

use Khoatran\Unlock\Controllers\ContactController;
use Khoatran\Unlock\Controllers\MovieController;
use Khoatran\Unlock\Route;
use Khoatran\Unlock\Services\Business\MovieService;

Route::get('/', [MovieController::class, 'index', MovieService::class]);
Route::post('/', [MovieController::class, 'store', MovieService::class]);
