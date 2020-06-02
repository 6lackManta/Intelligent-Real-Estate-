<?php

 Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');
 Route::get('login', 'Admin\LoginController@showLoginForm')->name('login');
 Route::get('register', 'Admin\ResgiterController@showRegistrationForm')->name('register');
// Route::group(['prefix' => 'login'],function(){

//  Route::get('/', 'Admin\LoginController@showLoginForm')->name('login');
// Route::get('/github', 'Auth\LoginController@redirectToProvider')->name('login.github');
// Route::get('/github/callback', 'Auth\LoginController@handleProviderCallback');
// Route::get('/google', 'Auth\LoginController@redirectToProviderg')->name('login.google');
// Route::get('/google/callback', 'Auth\LoginController@handleProviderCallbackg');

// });