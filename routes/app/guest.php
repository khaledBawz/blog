<?php

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'app.home.index']);
Route::resource('/article', 'ArticleController' , ['as' => 'app']);
Route::get('/auth', ['uses' => 'UserController@index', 'as' => 'app.user.index']);
