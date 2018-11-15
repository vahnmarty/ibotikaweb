<?php

Route::get('browse', 'PageController@browse')->name('page.browse');
Route::get('news', 'PageController@news')->name('page.news');
Route::get('events', 'PageController@events')->name('page.events');
Route::get('blog', 'PageController@blog')->name('page.blog');
Route::get('about', 'PageController@about')->name('page.about');
Route::get('search', 'PageController@search')->name('search');
