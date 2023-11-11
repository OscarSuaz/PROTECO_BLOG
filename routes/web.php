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
Route::get('/', function () {
  return redirect('/login');
  /* return view ('home_general'); */
});

/* Route::get('/perfil', function () {
  return view('perfil');
}); */

Route::get('/info', function () {
  return view('welcome');
});

Route::get('/practica', function () {
  return view('practica');
});

Route::get('/infosis', function () {
  return view('infosis');
});

Route::resource('/posts', PostController::class)->names([
  'index' => 'posts.index',
  'create' => 'posts.create',
  'perfil' => 'posts.perfil',
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


