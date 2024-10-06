<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostListController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts',[PostController::class,'index']);

Route::resource('posts',PostListController::class);
