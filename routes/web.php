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
//StudentController
Route::resource('students', 'StudentController');
Route::get('blocked-users','StudentController@blockedUsers');
Route::get('unblock/{id}','StudentController@unblock');
//ProfileController
Route::resource('profiles', 'ProfileController');
Route::get('change-password','ProfileController@password');
Route::post('reset-password/{id}','ProfileController@resetpassword');
//DepartmentController
Route::resource('departments', 'DepartmentController');
//RuleController
//Route::resource('rules', 'RuleController');
