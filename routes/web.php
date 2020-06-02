<?php
require 'frontend.php';

// Auth::routes();
			Route::get('admin/login','LandAdminLoginController@showLandLoginForm')->name('admin.login');
  Route::get('admin/register', 'LandAdminRegisterController@showLandRegistrationForm')->name('admin.register');
  Route::post('admin/register', 'LandAdminLoginController@store')->name('admin.posts');
  Route::post('admin/login', 'LandAdminLoginController@login')->name('admin.post');
Auth::routes(['verify' => true]);
 Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');


///LAND CONTROLLER
Route::get('/', 'HomeController@index')->name('/');
Route::get('/lands', 'HomeController@showLand')->name('lands');
Route::get('/lands/single/{id}', 'HomeController@showSingle')->name('lands.single');

// Login Controllrt
Route::group(['prefix' => 'login'],function(){
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/github', 'Auth\LoginController@redirectToProvider')->name('login.github');
Route::get('/github/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/google', 'Auth\LoginController@redirectToProviderg')->name('login.google');
Route::get('/google/callback', 'Auth\LoginController@handleProviderCallbackg');
});

//Land CRUD controler
Route::group(['as'=>'admin.'  ,'prefix'=>'admin'],function(){
Route::resource('land', 'LandController'); 
Route::get('/land/shows', 'LandController@shows')->name('land.shows');
Route::get('/land/profile', 'LandController@shows')->name('land.profile');
Route::resource('profile', 'LandAdminController'); 

});
Route::get('/descriptiond', 'dynamicApp@index');
Route::get('/description', 'LandController@create');

 Route::get('admin/land/description/fetch/{id}', 'LandController@php')->name('description.fetch');
 // admin/land/1/description/fetch/12
 Route::get('admin/land/{land}/description/fetch/{id}', 'LandController@php')->name('description.fetch');

 Route::get('admin/land/{land}/description/fetchs/{id}', 'LandController@phps')->name('description.fetchs');

 Route::get('admin/land/description/fetchs/{id}', 'LandController@phps')->name('description.fetchs');

  
//  Route::get('/google', 'LandAdminLoginController@redirectToProviderg')->name('landportal.login.google');
// Route::get('/google/callback', 'LandAdminLoginController@handleProviderCallbackg');
 // Route::get('/', 'lands\LoginsController@showLoginForm')->name('land.login');
 // 
 // 
//   Route::group(['prefix' => 'land'],function(){
// // Route::get('/github', 'LandAuth\LoginController@redirectToProvider')->name('land.login.github');
// // Route::get('/github/callback', 'LandAuth\LoginController@handleProviderCallback');
// // Route::get('/google', 'LandAuth\LoginController@redirectToProviderg')->name('land.login.google');
// // Route::get('/google/callback', 'LandAuth\LoginController@handleProviderCallbackg');

// });