<?php

use App\Http\Controllers\Api\ArticleControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::prefix('/search')->group(function () {
    Route::controller(ArticleControllerApi::class)->group(function () {
        Route::get('/article', 'search')->name('search.search');
        Route::get('/category', 'category')->name('search.category');
    });
});