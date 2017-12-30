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



Route::get('/', 'PostsController@index')->name('home');
Route::get('home', 'PostsController@home');

Route::get('posts/create', 'PostsController@create');
Route::post('post', 'PostsController@store');

Route::get('msg','AdminmsgController@msg');
Route::post('/contact/submit', 'MessagesController@create');
Route::post('/qoutes','QoutesController@quote');

Route::get('/login', 'SessionsController@login');
Route::post('/login', 'SessionsController@store');

Route::get('signup', 'RegistrationsController@signup');
Route::post('signup', 'RegistrationsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('mail', 'MailsController@mail');
// Route::get('/', function(){
//     return App\mail\welocme;
// });


Route::get('adminpanel', 'AdminController@admin');
Route::get('generatepin','AdminController@generate');
Route::get('enterpin','PinsController@enterpin');
Route::post('enterpin','PinsController@create');
Route::get('enter','PinsController@enter');







