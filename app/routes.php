<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',function(){
	return View::make('layout.home');
});



Route::get('addContact',function(){
	return View::make('layout.addContact');
});

Route::get('/home',function(){
	return View::make('layout.home');
});

Route::get('/addContact',function(){
	return View::make('layout.addContact');
});

Route::get('/realisation',function(){
	return View::make('layout.realisation');
});

Route::get('/about',function(){
	return View::make('layout.about');
});








