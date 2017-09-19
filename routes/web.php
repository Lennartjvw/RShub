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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/games', 'GamesController@index');
Route::get('/games/{game}', 'GamesController@show');

Route::get('/games/{game}/create', 'ReviewsController@create');
Route::post('/games', 'ReviewsController@store');
//Route::get('/reviews', 'ReviewsController@index');
//Route::get('/reviews/create', 'ReviewsController@create');
//Route::post('/reviews', 'ReviewsController@store');