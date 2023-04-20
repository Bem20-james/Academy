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
    Route::get('/about_us_more', 'HomeController@about_us')->name('about_us_more');

});


