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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::group(['namespace'=>'Auth'], function (){
	Route::get('/', 'LoginController@index')->name('login');
	Route::get('/dologin', 'LoginController@dologin')->name('dologin');
	Route::get('/kit/captcha/{tmp}', 'KitController@captcha')->name('captcha');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
