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

Route::get('/dashboard', function() {
    return view('home');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/class', 'Managers\ClassController@showFormCreateClass')->name('create-class');
Route::post('/class', 'Managers\ClassController@createClass')->name('create-class-submit');

Route::get('/detail', function() {
    return view('classes.detail');
});