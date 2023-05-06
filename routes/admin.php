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
// BLOGS Blogcategory
Route::group(['namespace' => 'admin', 'prefix' => '/admin/Blogcategory', 'middleware' => 'admin'], function () {
    Route::get('/create', 'BlogcategoryController@create')->name('blog_cat.create');
    Route::post('/store', 'BlogcategoryController@store')->name('blog_cat.store');
    Route::get('/view', 'BlogcategoryController@index')->name('blog_cat.index');
    Route::get('/edit/{id}', 'BlogcategoryController@edit')->name('blog_cat.edit');
    Route::post('/update{id}', 'BlogcategoryController@update')->name('blog_cat.update');
    Route::get('/delete/{id}', 'BlogcategoryController@delete')->name('blog_cat.delete');


});

// BLOGS
Route::group(['namespace' => 'admin', 'prefix' => 'admin/blogs', 'middleware' => 'admin'], function(){
    Route::get('/view', 'BlogsController@view')->name('view.blogs');
    Route::get('/edit/{id}', 'BlogsController@edit')->name('edit.blogs');
    Route::get('/create', 'BlogsController@create')->name('create.blogs');
    Route::post('/store', 'BlogsController@store')->name('store.blogs');
    Route::post('/update/{id}', 'BlogsController@update')->name('update.blogs');
    Route::get('/trash', 'BlogsController@trash')->name('trash.blogs');
    Route::get('/delete/{id}/{type}', 'BlogsController@delete')->name('delete.blogs');
    Route::get('/trash/restore/{id}', 'BlogsController@restorePost')->name('restoretrash.blogs');
});

// SETTINGS
Route::group(['namespace' => 'admin', 'prefix' => 'admin/instructor', 'middleware' => 'admin'], function(){
    Route::get('/view', 'SettingsController@view')->name('view.settings');
    Route::get('/edit', 'SettingsController@edit')->name('edit.settings');
    Route::get('/create', 'SettingsController@create')->name('add.settings');
    Route::post('/store', 'SettingsController@store')->name('store.settings');
});
