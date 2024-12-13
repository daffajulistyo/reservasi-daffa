<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ReservasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('hotel', HotelController::class);
Route::resource('kamar', KamarController::class);
Route::resource('reservasi', ReservasiController::class);