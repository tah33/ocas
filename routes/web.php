<?php

Auth::routes(['verify' => true]);
//HomeController
Route::get('/', 'HomeController@welcome');
Route::get('login','HomeController@loginForm');
Route::post('verify-login','HomeController@verifyLogin');
Route::get('home','HomeController@home');
Route::get('logout','HomeController@logout');
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
//SubjectController
Route::resource('subjects', 'SubjectController');
//TestController
Route::resource('tests', 'TestController');
//CommonController
Route::resource('commons', 'CommonController');
//ExamController
Route::resource('exams', 'ExamController');
//EmailController
Route::resource('emails', 'EmailController');
//EmailController
Route::resource('activities', 'ActivityController');
//PdfController
Route::get('students-view','PdfController@viewStudents');
Route::get('students-download','PdfController@downloadStudents');
Route::get('block-view','PdfController@viewBlockedStudents');
Route::get('block-download','PdfController@downloadBlockedStudents');
Route::get('department-view','PdfController@viewdepartment');
Route::get('department-download','PdfController@downloaddepartment');
Route::get('subject-view','PdfController@viewSubject');
Route::get('subject-download','PdfController@downloadSubject');
Route::get('question-view/{id}','PdfController@viewQuestion');
Route::get('question-download/{id}','PdfController@downloadQuestion');

