<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{id}', 'ProfileController@index')->name('profile');
Route::put('/profile_update/{id}', 'ProfileController@update')->name('update');
Route::get('/update_pass/{id}', 'PasswordController@index')->name('change_password');
Route::put('/pass_update/{id}', 'PasswordController@update')->name('update');