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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('web')->middleware('web')->group(function (){
    Route::get('/index', 'HomeController@index')->name('index');
    Route::get('/about_us', 'HomeController@about')->name('about');
    Route::get('/about_us_more', 'HomeController@about_more')->name('about_us_more');
});
