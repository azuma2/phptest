<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Middleware\FirstMiddleware;


Route::get('/', [ListController::class, 'index']);
Route::post('/', [ListController::class, 'post']);
Route::post('/', [TestController::class, 'post'])->middleware(FirstMiddleware::class);