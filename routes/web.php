<?php

use App\Http\Controllers\Api\PostController as PostApi;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [PostController::class, 'index'])->middleware('auth');

Route::get('{profile}', [ProfileController::class, 'index']);

Route::get('api/posts', [PostApi::class, 'index'])->name('api.post.index');
