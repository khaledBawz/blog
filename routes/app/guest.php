<?php

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'app.home.index']);
Route::resource('/article', 'ArticleController' , ['as' => 'app']);
// Route::get('/contact-us', ['uses' => 'HomesController@contact', 'as' => 'app.home.contact']);
// Route::post('/contact-us', ['uses' => 'HomesController@post_contact', 'as' => 'app.home.contact']);
// Route::get('/terms', ['uses' => 'HomesController@terms', 'as' => 'app.home.term']);
// Route::get('/about', ['uses' => 'HomesController@about', 'as' => 'app.home.about']);