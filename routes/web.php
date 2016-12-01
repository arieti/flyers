<?php



Route::resource('flyers', 'FlyersController');
Route::get('/', 'FlyersController@index');
Route::get('{zip}/{street}', 'FlyersController@show');

Route::post('{zip}/{street}/photos', ['as' => 'store_photo_path', 'uses' => 'PhotosController@store']);


Auth::routes();

Route::delete('photos/{id}', 'PhotosController@destroy');

Route::get('{whatever}', function () {
    return view('errors.404');
});