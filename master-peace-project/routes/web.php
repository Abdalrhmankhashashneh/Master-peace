<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\home;



Route::resource('admin', AdminController::class);



Route::get('/', function () {
    return view('toindex');
});
Route::resource('raqib', home::class);

Route::get('Raqib/about', [home::class , 'about'])->name('about');
Route::get('Raqib/scchool', [home::class , 'school'])->name('school');

