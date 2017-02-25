<?php

Route::get('/', 'MyController@showHomepage');
Route::get('/logout', 'LogoutController@doLogout');
Route::get('/login', 'LoginController@showForm');
Route::post('/login', 'LoginController@doLogin');
Route::get('/register', 'RegisterController@showForm');
Route::post('/register', 'RegisterController@doRegister');

    