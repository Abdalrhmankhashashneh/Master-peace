<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\home;
use App\Http\Controllers\Login;
use App\Http\Controllers\ContactController;



// ********************** admin routes ********************************

Route::resource('admin', AdminController::class)->middleware('AdminIsLogin');
Route::get('ad/login', [AdminController::class , 'login'])->name('admin.login')->middleware('AdminIsLogin');
Route::post('ad/login_v', [AdminController::class , 'login_v'])->name('admin.login_v');
Route::post('ad/logout', [AdminController::class , 'logout'])->name('admin.logout')->middleware('AdminIsLogin');


// ********************** school routes ********************************

Route::get('ad/school', [AdminController::class , 'school'])->name('admin.school')->middleware('AdminIsLogin');
Route::get('ad/school_edit/{id}', [AdminController::class , 'school_edit'])->name('admin.school_edit');
Route::put('ad/school_update/{id}', [AdminController::class , 'school_update'])->name('admin.school_update');
Route::get('ad/add_school', [AdminController::class , 'school_create'])->name('admin.school_add');
Route::post('ad/store_school', [AdminController::class , 'school_store'])->name('admin.school_store');
Route::delete('ad/store_delete/{id}', [AdminController::class , 'school_delete'])->name('admin.school_delete');
Route::get('ad/show_school/{id}', [AdminController::class , 'school_show'])->name('admin.school_show');

// ********************** school teacher routes ********************************
Route::get('ad/show_school/teachers/{id}', [AdminController::class , 'school_teachers'])->name('admin.school_show_teachers');
Route::post('ad/show_school/teachers/search/{id}', [AdminController::class , 'school_search_teachers'])->name('admin.school_show_teachers_search');

// ********************** school students routes ********************************
Route::get('ad/show_school/students/{id}', [AdminController::class , 'school_students'])->name('admin.school_show_students');
Route::post('ad/show_school/students/search/{id}', [AdminController::class , 'school_search_students'])->name('admin.school_show_students_search');

// ********************** school classrooms routes ********************************
Route::get('ad/show_school/classrooms/{id}', [AdminController::class , 'school_classrooms'])->name('admin.school_show_classrooms');
Route::post('ad/show_school/classrooms/search/{id}', [AdminController::class , 'school_search_classrooms'])->name('admin.school_show_classrooms_search');


// ********************** school routes ********************************


// ********************** teacher routes ********************************

Route::resource('teachers', TeacherController::class);

// ********************** teacher routes ********************************

// ********************** students routes ********************************

Route::resource('students', StudentController::class);
Route::get('students/show/teacher/{id}', [StudentController::class , 'show_student_info'])->name('admin.student_teacher');

// ********************** students routes ********************************



// ********************** classrooms routes ********************************

Route::resource('classrooms', ClassroomController::class);

// ********************** classrooms routes ********************************




// ********************** admin routes ********************************


Route::get('/', function () {
    return view('toindex');
});

Route::resource('raqib', home::class);

Route::get('Raqib/about', [home::class , 'about'])->name('about');
Route::get('Raqib/contact', [home::class , 'contact'])->name('contactview');
Route::get('Raqib/scchool', [home::class , 'school'])->name('school');

Route::get('Raqib/login', [home::class , 'login'])->name('login')->middleware('islogin');
Route::post('Raqib/login', [Login::class , 'login'])->name('login')->middleware('islogin');
Route::get('Raqib/logout', [Login::class , 'logout'])->name('logout')->middleware('islogin');
Route::get('Raqib/profile', [Login::class , 'profile'])->name('profile')->middleware('islogin');
Route::post('contact/s' , [ContactController::class , 'store'])->name('contact');
Route::get('contact/{id}' , [ContactController::class , 'change'])->name('contact_change');

