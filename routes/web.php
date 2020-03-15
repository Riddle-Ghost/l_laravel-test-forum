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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'guest'], function() {

//    Route::get('/login', 'AuthController@loginForm')->name('login');
//    Route::post('/login', 'AuthController@login');

});

Auth::routes();
Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');

Route::get('/ajaxform', 'HomeController@ajaxform');
Route::get('/ajax', 'HomeController@ajax');
Route::post('/ajax', 'HomeController@ajax');

Route::get('/{slug}', 'HomeController@category');
Route::get('/{slug}/{topic_slug}', 'HomeController@topic');
