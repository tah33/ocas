<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
//HomeController
Route::get('login','HomeController@loginForm');
Route::post('verify','HomeController@verify');
Route::get('home','HomeController@home');
Route::get('logout','HomeController@logout');

