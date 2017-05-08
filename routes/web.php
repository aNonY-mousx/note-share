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
    return view('home');
});

Route::get('/user',function(){
	return view('userprofile');
});

Route::get('/user0',function(){
	return view('userprofile0');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
