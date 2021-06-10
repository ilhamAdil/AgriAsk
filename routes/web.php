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
    return redirect('/home');
});

Route::get('/home','HomeController@index');

Route::get('/blog','BlogController@index');

Route::get('/signin', function(){
    return view('auth.login');
});

Route::get('/community','CommunityController@index');
Route::post('/community','CommunityController@store');
Route::delete('/community/{id}','CommunityController@destroy');
Route::get('/community/{id}/edit','CommunityController@edit');
Route::get('/community/{id}/detail/{user_id}','CommunityController@show')->name('show');
Route::put('/community/{id}','CommunityController@update');

Route::post('/community/{id}/detail/{user_id}','CommunityController@answer');
Route::post('/community/{id}/detail/{user_id}/upvote','CommunityController@upvote');
Route::post('/community/{id}/detail/{user_id}/downvote','CommunityController@downvote');

Route::get('/faq','FaqController@index');
Route::get('/tag','TagController@index');
Route::get('/users','UsersController@index');

Route::get('/user/{id}/overview','UserController@index');
Route::get('/user/{id}/listquestion','UserController@indexQuestion')->name('listQ');;

Route::delete('/user/{id}/listquestion/{quest_id}','UserController@destroy');
Route::get('/user/{id}/listarticle','UserController@indexArticle');

Route::get('/setting/{id}','SettingController@show');
Route::put('/setting/{id}','SettingController@update');


Auth::routes();


