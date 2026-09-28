<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('counties', CountyController::class);
Route::resource('cities', CityController::class);
