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

Route::get('password/verify', 'HomeController@showRequestForm');
Route::get('password/reset', 'HomeController@showLinkRequestForm');
Route::post('password/email', 'HomeController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'HomeController@showResetForm');
Route::post('password/reset', 'HomePasswordController@reset');
