<?php

Route::get('/', function() {
  return View::make("new");
});

Route::get('/', 'BugsController@welcome');
Route::get('/bugs', 'BugsController@index');
Route::get('/bugs/create', 'BugsController@showCreateForm');
Route::get('/bugs/{id}', 'BugsController@show');

//Route::post('/bugs/create', 'BugsController@createBug');