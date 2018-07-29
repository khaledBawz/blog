<?php

Auth::routes();

// Guest
Route::group([], function(){
    require(__DIR__ .'/app/guest.php');
});

// Auth access
Route::group(['middleware' => 'auth'], function(){
    require(__DIR__ .'/app/auth.php');
});