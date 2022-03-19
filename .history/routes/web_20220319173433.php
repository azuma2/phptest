<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Middleware\FirstMiddleware;
use App\Http\Controllers\AuthorController;


Route::post('/', [ListController::class, 'post']);
Route::get('/verror', [ListController::class, 'verror']);
Route::get('/', [AuthorController::class, 'index']);