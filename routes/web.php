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

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', function () {
    return view('front.hello');
});

Route::get('/index', function () {
    return view('front.index');
});

Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/about', function () {
    return view('front.about');
});

Auth::routes();

Route::get('/dashboard','dashboardController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cats','CategoryController');
