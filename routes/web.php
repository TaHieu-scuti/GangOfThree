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

route::post('/lecturer/register', 'Auth\ClassManagerRegisterController@register')->name('lecturer-register-submit');
route::get('/lecturer/register', 'Auth\ClassManagerRegisterController@showRegistrationForm')->name('lecturer-register');
route::post('/register', 'Auth\RegisterController@register')->name('student-register-submit');
route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('student-register');
Route::get('/class', function() {
    return view('classes.register');
});

Route::get('/detail', function() {
    return view('classes.detail');
});
Route::get('/sign-out', function() {
    Auth::logout();
    return view('welcome');
})->name('sign-out');