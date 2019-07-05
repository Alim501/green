<?php

Route::get('/slider', function () {
    return view('slider');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('page', 'PageController');
    Route::resource('block', 'BlockController');
    Route::resource('miniBlock', 'MiniBlockController');
    Route::resource('menu', 'MenuSectionsController');

});
Auth::routes();
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');
Route::get('{slug}','ViewController@index');
Route::get('/','ViewController@main');
Route::get('page/gallery', 'ViewController@gallery');
