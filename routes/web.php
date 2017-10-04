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

//NEWS
Route::get('/','newsController@index');
Route::get('/home', 'newsController@dashboard')->middleware('auth');
Route::get('/home/add', 'newsController@addNews',['message'=>''])->middleware('auth');
Route::post('/home/saveNews', 'newsController@saveNews')->middleware('auth');
Route::post('/home/remove/','newsController@remove')->middleware('auth');
Route::get('/home/{id}','newsController@show')->where('id', '[0-9]+');


//Dialogs
Route::post('/home/deleteNews','dialogController@showConfirm')->middleware('auth');

//PDF
Route::get('/pdf/{id}','pdfController@toPDF');

//AUTH
Auth::routes();
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');


//RSS
Route::get('rss','rssController@index')->name('rss');

//MAIL
Route::get('contact','mailController@index')->name('contact');
Route::post('contact/send','mailController@sendMail');


