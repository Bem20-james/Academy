<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['namespace' => 'web', '' => 'auth'], function (){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/about_us', 'HomeController@about')->name('about_us');
    Route::get('/courses', 'HomeController@courses')->name('courses');
});

Route::group(['namespace' => 'auth', 'prefix' => 'auth', 'middleware' => 'web'], function (){
    Route::get('/login', 'AuthController@login')->name('login');
    Route::get('/register', 'AuthController@register')->name('register');
    Route::get('/register_teachers', 'AuthController@registerTeach')->name('register_teachers');
    Route::post('/process/reg', 'AuthController@processReg')->name('process.reg');
    Route::get('/process/login', 'AuthController@processLogin')->name('process.login');
});




