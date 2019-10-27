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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/send-message', 'SendMessageController@index')->name('sendmessage');
Route::get('/send-message/{a?}', 'SendMessageController@index')->name('sendmessage');
Route::post('/send-message', 'SendMessageController@submit')->name('submit-message');
Route::get('/profile', 'ProfileController@view')->name('view-profile');
Route::get('/profile/{id}', 'ProfileController@formProfile')->name('formProfile');
Route::post('/profile/update/submit', 'ProfileController@updateProfile')->name('updateProfile');
