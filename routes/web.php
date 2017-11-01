<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Games
Route::get('/games', 'GamesController@index');
Route::get('/games/add-game', 'GamesController@add');
Route::post('/games/add-game', 'GamesController@store');
Route::get('/games/{game}', 'GamesController@show');

//Stories
Route::get('/games/{game}/create-story', 'StoriesController@create');
Route::post('/games/create-story', 'StoriesController@store');

//Reviews
Route::get('/games/{game}/create-review', 'ReviewsController@create');
Route::post('/games/create-review', 'ReviewsController@store');

//Users
Route::get('/user/{id}', 'UsersController@show');
Route::get('/user/{id}/edit', 'UsersController@edit');
Route::patch('/user/{id}/edit', 'UsersController@update');

