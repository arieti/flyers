<?php



Route::resource('flyers', 'FlyersController');
Route::get('/', 'FlyersController@index');
Route::get('{zip}/{street}', 'FlyersController@show');

Route::post('{zip}/{street}/photos', ['as' => 'store_photo_path', 'uses' => 'PhotosController@store']);


Auth::routes();
