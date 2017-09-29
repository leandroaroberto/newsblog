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


Route::post('/home/remove/','newsController@remove')->middleware('auth');


Route::get('/home/{id}','newsController@show')->where('id', '[0-9]+');


Route::post('/home/deleteNews','newsController@showConfirm')->middleware('auth');

//PDF
Route::get('/pdf/{id}','newsController@toPDF');



Auth::routes();

Route::get('rss','rssController@index');

//RSS

//mailgun
Route::get('mail', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->to('leroberto@gmail.com');
	});
});


/*Route::get('mail', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->subject('Mailgun and Laravel are awesome!');
		$message->from('no-reply@leandroroberto.com.br', 'Leandro Roberto Fotografia');
		$message->to('leroberto@gmail.com');
	});
});*/