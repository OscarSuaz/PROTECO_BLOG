<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/', PostController::class)->names([
  'index' => 'posts.index',
  'create' => 'posts.create',
  'store' => 'posts.store',
  'show' => 'posts.show',
]);

Route::resource('/comments', CommentController::class)->names([
  'index' => 'comments.index',
  'create' => 'comments.create',
  'store' => 'comments.store',
  'show' => 'comments.show',
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
