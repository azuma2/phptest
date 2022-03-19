<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;




Route::get('/', function () {
    return view('index');
});