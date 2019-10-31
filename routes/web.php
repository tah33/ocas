<?php

Route::get('/', function () {
    return view('welcome');
});
//HomeController
Route::get('login','HomeController@loginForm');
Route::post('verify','HomeController@verify');