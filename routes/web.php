<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/index','TestController@index');