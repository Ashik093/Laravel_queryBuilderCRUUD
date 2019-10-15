<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('all-contacts','ContactController@Index')->name('all.contacts');
