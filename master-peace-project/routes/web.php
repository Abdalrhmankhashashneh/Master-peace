<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\home;

Route::get('/', function () {
    return view('toindex');
});
Route::resource('raqib', home::class);

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::resource('admin', AdminController::class);
