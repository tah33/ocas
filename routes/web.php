<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);
//HomeController
Route::get('login','HomeController@loginForm');
Route::post('verify-login','HomeController@verifyLogin');
Route::get('home','HomeController@home')->middleware('auth:admin,student');
Route::get('logout','HomeController@logout');
Route::get('/student/verify/{token}', 'HomeController@verifyStudent');
Route::resource('students', 'StudentController');
Route::get('blocked-users','StudentController@blockedUsers');
Route::get('unblock/{id}','StudentController@unblock');

Route::resource('profiles', 'ProfileController');
