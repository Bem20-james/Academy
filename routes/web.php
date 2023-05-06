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

// Home controller

Route::group(['namespace' => 'web', 'prefix' => 'blog', 'middleware' => 'auth'], function () {
    Route::get('/view/{blogcategory}/{id}', 'HomeController@blogcatposts')->name('blogcat.post');
    Route::get('/view/post/{title}/{blogcategory}/{id}', 'HomeController@posts')->name('view.post');
    Route::post('store', 'HomeController@store')->name('review.store');
    Route::get('/view/web/post/{id}', 'HomeController@reviewpost')->name('review.post');
});



Route::group(['namespace' => 'web', 'prefix' => 'web', 'middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/about_us', 'HomeController@about')->name('about_us');
    Route::get('/Contact', 'HomeController@contact')->name('contact');
    Route::get('/blog', 'HomeController@blog')->name('blog');
});

Route::group(['namespace' => 'auth', 'prefix' => 'auth', 'middleware' => 'web'], function () {
    Route::get('/login', 'AuthController@login')->name('login');
    Route::get('/register', 'AuthController@register')->name('register');
    Route::get('/register_teachers', 'AuthController@registerTeach')->name('register_teachers');
    Route::post('/process/reg', 'AuthController@processReg')->name('process.reg');
    Route::get('/process/login', 'AuthController@processLogin')->name('process.login');
});
