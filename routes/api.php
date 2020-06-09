<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('/content')->group(function (){
    Route::apiResource('posts', 'API\PostController');
    Route::apiResource('categories', 'API\CategoryController');
});

Route::apiResource('search', 'API\SearchController');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
