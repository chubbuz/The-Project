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

    return view('front.index');

});
Route::resource('admin','AdminController');
Auth::routes();

// Route::get('/admin', 'HomeController@index');
Route::get('/home',function(){
	return view('home');
});

Route::get('/welcome',function(){
	return view('welcome');
});


Route::get('admin/category',function(){
	return view('admin.category');
});


Route::get('/try',function(){
	return view('front.try');
});
Route::get('/test',function(){
	return view('layouts.test_design');
});