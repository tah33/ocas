<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);
//HomeController
Route::get('login','HomeController@loginForm');
Route::post('verify','HomeController@verify');
Route::get('home','HomeController@home')->middleware('auth:admin,student');
Route::get('logout','HomeController@logout');
Route::get('register','HomeController@registerForm');
Route::post('save-account','HomeController@create');

Route::get('/student/verify/{token}', 'HomeController@verifyStudent');

