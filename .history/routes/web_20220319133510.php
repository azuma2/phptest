<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

Route::get('/test', [ListController::class, 'index']);

Route::get('/test', function () {
    return 'test';
});