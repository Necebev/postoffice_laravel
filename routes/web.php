<?php

use App\Http\Controllers\CountyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('counties', CountyController::class);
