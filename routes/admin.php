<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/index', 'HomeController@index')->name('admin.dashboard');
});

//TEACHERS
Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/view', 'TeachersController@view')->name('view_instructors');
    Route::get('/add', 'TeachersController@create')->name('add_instructor');
    Route::post('/store', 'TeachersController@store')->name('store_instructor');

});

//STUDENTS
// Route::group(['namespace' => 'admin', 'prefix' => 'admin/instructor', 'middleware' => 'admin'], function(){
//     Route::get('/view', 'StudentsController@view')->name('view_students');

// });

// SETTINGS
Route::group(['namespace' => 'admin', 'prefix' => 'admin/instructor', 'middleware' => 'admin'], function(){
    Route::get('/view', 'SettingsController@view')->name('view.settings');
    Route::get('/edit', 'SettingsController@edit')->name('edit.settings');
    Route::get('/create', 'SettingsController@create')->name('add.settings');
    Route::post('/store', 'SettingsController@store')->name('store.settings');
});
