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
Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/view_students', 'StudentsController@view')->name('view_students');
    Route::get('/add_student', 'StudentsController@create')->name('add_student');
    Route::post('/store_student', 'StudentsController@store')->name('store_student');
});

// SETTINGS
Route::group(['namespace' => 'admin', 'prefix' => 'admin/instructor', 'middleware' => 'admin'], function(){
    Route::get('/view', 'SettingsController@view')->name('view.settings');
    Route::get('/edit', 'SettingsController@edit')->name('edit.settings');
    Route::get('/create', 'SettingsController@create')->name('add.settings');
    Route::post('/store', 'SettingsController@store')->name('store.settings');
});

// CLASSES
Route::group(['namespace' => 'admin', 'prefix' => 'admin/classes', 'middleware' => 'admin'], function(){
    Route::get('/view', 'ClassesController@view')->name('view.classes');
    Route::get('/edit', 'ClassesController@edit')->name('edit.classes');
    Route::get('/create', 'ClassesController@create')->name('add.classes');
    Route::get('/update', 'ClassesController@update')->name('update.classes');
    Route::get('/delete', 'ClassesController@delete')->name('delete.classes');
    Route::post('/store', 'ClassesController@store')->name('store.classes');
});

// DEPARTMENT
Route::group(['namespace' => 'admin', 'prefix' => 'admin/departments', 'middleware' => 'admin'], function(){
    Route::get('/view', 'DepartmentsController@view')->name('view.department');
    Route::get('/edit/{id}', 'DepartmentsController@edit')->name('edit.department');
    Route::get('/create', 'DepartmentsController@create')->name('add.department');
    Route::post('/update/{id}', 'DepartmentsController@update')->name('update.department');
    Route::get('/delete/{id}', 'DepartmentsController@delete')->name('delete.department');
    Route::post('/store', 'DepartmentsController@store')->name('store.department');
});

// SUBJECTS
Route::group(['namespace' => 'admin', 'prefix' => 'admin/subjects', 'middleware' => 'admin'], function(){
    Route::get('/view', 'SubjectsController@view')->name('view.subject');
    Route::get('/edit', 'SubjectsController@edit')->name('edit.subject');
    Route::get('/create', 'SubjectsController@create')->name('add.subject');
    Route::get('/update', 'SubjectsController@update')->name('update.subject');
    Route::get('/delete', 'SubjectsController@delete')->name('delete.subject');
    Route::post('/store', 'SubjectsController@store')->name('store.subject');
});
