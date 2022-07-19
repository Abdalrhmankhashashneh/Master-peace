<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\home;



// ********************** admin routes ********************************

Route::resource('admin', AdminController::class);

// ********************** school routes ********************************

Route::get('ad/school', [AdminController::class , 'school'])->name('admin.school');
Route::get('ad/school_edit/{id}', [AdminController::class , 'school_edit'])->name('admin.school_edit');
Route::put('ad/school_update/{id}', [AdminController::class , 'school_update'])->name('admin.school_update');
Route::get('ad/add_school', [AdminController::class , 'school_create'])->name('admin.school_add');
Route::post('ad/store_school', [AdminController::class , 'school_store'])->name('admin.school_store');
Route::delete('ad/store_delete/{id}', [AdminController::class , 'school_delete'])->name('admin.school_delete');
Route::get('ad/show_school/{id}', [AdminController::class , 'school_show'])->name('admin.school_show');
Route::get('ad/show_school/teachers/{id}', [AdminController::class , 'school_teachers'])->name('admin.school_show_teachers');
Route::post('ad/show_school/teachers/search/{id}', [AdminController::class , 'school_search_teachers'])->name('admin.school_show_teachers_search');


// ********************** school routes ********************************

// ********************** teacher routes ********************************

Route::resource('teachers', TeacherController::class);

// ********************** teacher routes ********************************


Route::get('/', function () {
    return view('toindex');
});

Route::resource('raqib', home::class);

Route::get('Raqib/about', [home::class , 'about'])->name('about');
Route::get('Raqib/contact', [home::class , 'contact'])->name('contact');
Route::get('Raqib/scchool', [home::class , 'school'])->name('school');
Route::get('Raqib/login', [home::class , 'login'])->name('login');

