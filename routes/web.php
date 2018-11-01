<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

// Homepage route
Route::get('/', 'ProjectController@index');

// About route
Route::get('/about', function() {
  return view('about');
});

// Say hello
Route::get('/hello', function() {

  $user = \App\User::first();
  \Mail::to($user)->send(new \App\Mail\SayHello($user));

  abort(404, 'You said hello to an empty, dark well.');

});

// Admin Dashboard routes
Route::get('/admin', 'ProjectController@create');
Route::post('/admin', 'ProjectController@store');
Route::get('/admin/{id}', 'ProjectController@edit');
Route::patch('/admin/{id}', 'ProjectController@update');
Route::delete('/admin/{id}', 'ProjectController@destroy');

// Authentication routes
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset routes
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
