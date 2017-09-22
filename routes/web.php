<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/games', 'GamesController@index');
Route::get('/games/{game}', 'GamesController@show');

Route::get('/games/{game}/create-review', 'ReviewsController@create');                                  
Route::post('/games', 'ReviewsController@store');

Route::get('/games/{game}/create-story', 'StoriesController@create');
Route::post('/games', 'StoriesController@store');


//Route::get('/reviews', 'ReviewsController@index');
//Route::get('/reviews/create', 'ReviewsController@create');
//Route::post('/reviews', 'ReviewsController@store');