<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@welcome');

Route::group(['namespace' => 'Auth'], function() {
    // Login...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login')->name('login');

    //  Logout...
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::post('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register')->name('register');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.reset');
});

Route::get('/home', 'HomeController@index');

// Testing
Route::get('/test', function() {
    return view('test');
});
