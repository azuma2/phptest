<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Middleware\FirstMiddleware;
use App\Http\Controllers\AuthorController;

Route::get('/', [ListController::class, 'index']);
Route::post('/', [ListController::class, 'post']);
Route::get('/verror', [ListController::class, 'verror']);