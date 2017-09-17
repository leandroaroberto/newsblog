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

/*Route::get('/', function () {
    //return view('welcome');
    return view('index');
});*/

Route::get('/','newsController@index');

Auth::routes();

Route::get('/home', 'newsController@dashboard')->middleware('auth');



Route::get('/home/add', 'newsController@addNews',['message'=>''])->middleware('auth');

Route::post('/home/saveNews', 'newsController@saveNews')->middleware('auth');

//Route::get('/home/remove/{id}','newsController@remove')->middleware('auth');;

Route::post('/home/remove/','newsController@remove')->middleware('auth');;

Route::get('/home/{id}','newsController@show');


Route::post('/home/deleteNews','newsController@showConfirm');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
