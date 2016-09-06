<?php

Route::get('/', 'PagesController@main');
Route::get('/review','PagesController@review');
Route::get('/review/{city?}','PagesController@review');
