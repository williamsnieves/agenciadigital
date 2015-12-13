<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@index');

Route::get('language', 'LanguageController@index');

Route::post('contact', 'PageController@storecontact');


Route::get('admin', function () {
  return redirect('admin/dashboard');
});

Route::group([
  'namespace' => 'Admin',
  'middleware' => 'auth',
], function () {
  Route::get('admin/dashboard', 'DashboardController@index');
  Route::resource('admin/editors', 'AdminUsersController');
  Route::resource('admin/pages', 'PageController');
  Route::resource('admin/sections', 'SectionController');
});


Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);