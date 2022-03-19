<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;



Route::get('/', [ListController::class, 'index']);
Route::post('/', [ListController::class, 'post']);