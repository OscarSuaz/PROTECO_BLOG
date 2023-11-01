<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::resource('/', PostController::class)->names([
  'index' => 'posts.index',
  'create' => 'posts.create',
  'store' => 'posts.store',
  'show' => 'posts.show',
]);

Route::resource('/Comment', CommentController::class)->names([
    'index' => 'Comments.index',
    'create' => 'Comments.create',
    'store' => 'Comments.store',
    'show' => 'Comments.show',
  ]);
  

/* Route::get('/', function () {
    return view('welcome');
});
 */