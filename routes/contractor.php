<?php

Route::group(['namespace' => 'Contractor'], function() {
    Route::get('/', 'HomeController@index')->name('contractor.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('contractor.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('contractor.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('contractor.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('contractor.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('contractor.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('contractor.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('contractor.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('contractor.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('contractor.verification.verify');
       

//dashboard 
Route::get('/index', 'HomeController@index')->name('contractor.index');
Route::get('/profile', 'HomeController@profile')->name('contractor.profile');
Route::get('/create', 'HomeController@create')->name('contractor.profile.create');
Route::post('/store', 'HomeController@store')->name('contractor.profile.store');

});