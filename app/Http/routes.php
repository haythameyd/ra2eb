<?php

Route::get('/', 'PagesController@main');
Route::get('/review/{city}','PagesController@review');
Route::get('/review','PagesController@review');
