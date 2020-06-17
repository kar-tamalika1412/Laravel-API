<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/blogs','BlogController');

Route::group(['prefix'=>'blogs'],function(){
	Route::apiResource('/{blogID}/reviews','ReviewController');
});