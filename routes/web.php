<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'],['verified']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('classes','ClassController');
});

// admin routes
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

// student routes
Route::get('student/home', 'HomeController@studentHome')->name('student.home')->middleware('is_student');

// teacher routes
Route::get('teacher/home', 'HomeController@teacherHome')->name('teacher.home')->middleware('is_teacher');
