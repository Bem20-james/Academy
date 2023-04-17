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


Route::group(['namespace' => 'web'], function (){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/about_us', 'HomeController@about')->name('about');

    //Auth routes
    Route::get('/login', 'HomeController@login')->name('login');
    Route::get('/register', 'HomeController@register')->name('register');
});
