<?php


//site routes

Route::get('/','SiteController@showHome');

//authentication routes
Route::auth();

//subscription routes


//account routes


//single post
Route::get('{slug}','SiteController@showPost');