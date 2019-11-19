<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);
//HomeController
Route::get('login','HomeController@loginForm');
Route::post('verify-login','HomeController@verifyLogin');
Route::get('home','HomeController@home');
Route::get('logout','HomeController@logout');
Route::get('/student/verify/{token}', 'HomeController@verifyStudent');
//StudentController
Route::resource('students', 'StudentController');
Route::get('blocked-students','StudentController@blockedUsers');
Route::get('unblock/{id}','StudentController@unblock');
//ProfileController
Route::resource('profiles', 'ProfileController');
Route::get('change-password','ProfileController@password');
Route::post('reset-password/{id}','ProfileController@resetpassword');
//DepartmentController
Route::resource('departments', 'DepartmentController');
//QuestionController
Route::resource('questions', 'QuestionController')->except('create','store');
Route::get('question/create/{id}', 'QuestionController@create');
Route::post('question/store/{id}', 'QuestionController@store');
//ExamController
Route::resource('subjects', 'SubjectController');