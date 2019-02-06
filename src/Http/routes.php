<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'e200\Mediavel\Http\Controllers'], function () {
    Route::post('/mediavel/image', 'ImageController@add');
    Route::post('/mediavel/file', 'FileController@add');
});
