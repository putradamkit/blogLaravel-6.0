<?php

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::get('/create-new-article', 'ArticleController@create')->name('articles.create');

Route::post('/create-new-article', 'ArticleController@store');

Route::get('articles', 'articleController@index')->name('articles');

Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');

Route::get('/edit-the-article-about/{article}', 'ArticleController@edit')->name('articles.edit');

Route::post('/edit-the-article-about/{article}', 'ArticleController@update');

Route::post('/kick-this-out/{article}', 'ArticleController@destroy')->name('articles.delete');