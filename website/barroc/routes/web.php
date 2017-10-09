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
    return view('auth.login');
});

Route::get('/development', function () {
    return view('development');
});

//Route::get('/Login', function () {
//    return view('Login');
//});


Route::get('/marketing', function () {
    return view('marketing');
});

Route::get('/finance', function () {
    return view('finance');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
