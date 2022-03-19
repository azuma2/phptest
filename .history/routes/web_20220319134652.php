<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

Route::get('/test', [ListController::class, 'index']);

Route::get('/{text?}', function ($text = "テキスト") {
    return $text . "が表示されます";
});