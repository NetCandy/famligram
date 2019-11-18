<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->middleware('auth');

Route::get('{profile}', [\App\Http\Controllers\ProfileController::class, 'index']);


Route::prefix('api')->group(function () {

    Route::get('posts', [\App\Http\Controllers\Api\PostController::class, 'index'])
        ->name('api.post.index');

});
