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
Route::post('/home/deleteNews','newsController@showConfirm')->middleware('auth');

//PDF
Route::get('/pdf/{id}','newsController@toPDF');

//AUTH
Auth::routes();

//RSS
Route::get('rss','rssController@index')->name('rss');

//MAIL

Route::get('contact','mailController@index')->name('contact');
Route::post('contact/send','mailController@sendMail');

/*Route::get('mail', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->subject('Mailgun and Laravel are awesome!');
		$message->from('no-reply@leandroroberto.com.br', 'Leandro Roberto Fotografia');
		$message->to('leroberto@gmail.com');
	});
        echo "Mail sent successfuly!";
});*/