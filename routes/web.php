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
    return view('content.home');
});

// Route::get('/home',function(){
//     return view('content.home');
// });

Route::get('/blog', function () {
    return view('content.blog');
});

Route::get('/signin', function(){
    return view('auth.login');
});

Route::get('/community','CommunityController@index');
Route::post('/community','CommunityController@store');
Route::delete('/community/{id}','CommunityController@destroy');
Route::get('/community/{id}/edit','CommunityController@edit');
Route::get('/community/{id}','CommunityController@show');
Route::put('/community/{id}','CommunityController@update');

Route::post('/community/{id}','CommunityController@answer');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

