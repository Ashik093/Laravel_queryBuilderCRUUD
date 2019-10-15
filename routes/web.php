<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('all-contacts','ContactController@Index')->name('all.contacts');
Route::get('/add-contact','ContactController@AddContact');
Route::post('/insert-contact','ContactController@InsertContact');
Route::get('/delete-contact/{id}','ContactController@DeleteContact');
Route::get('/edit-contact/{id}','ContactController@Edit');
Route::post('/update-contact/{id}','ContactController@UpdateContact');
Route::get('/view-contact/{id}','ContactController@ViewContact');