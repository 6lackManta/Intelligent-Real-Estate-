<?php

Route::group(['namespace' => 'Vendor'], function() {
    Route::get('/', 'HomeController@index')->name('vendor.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('vendor.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('vendor.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('vendor.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('vendor.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('vendor.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('vendor.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('vendor.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('vendor.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('vendor.verification.verify');

});