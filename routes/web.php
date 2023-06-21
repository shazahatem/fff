<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middlewares\RoleMiddleware;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::put('/profile/update',[App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');




Route::middleware('auth')->group(function(){


//routes for posto
Route::get('/posts',[App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/posts/trashed',[App\Http\Controllers\PostController::class, 'postsTrashed'])->name('posts.trashed');
Route::get('/post/create',[App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post/store',[App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post/show/{slug}',[App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/post/edit/{id}',[App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::post('/post/update/{id}',[App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::get('/post/destroy/{id}',[App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
Route::get('/post/hdelete/{id}',[App\Http\Controllers\PostController::class, 'hdelete'])->name('post.hdelete');
Route::get('/post/restore/{id}',[App\Http\Controllers\PostController::class, 'restore'])->name('post.restore');
});



//odbc_tableprivilegesRoute::get('/posts',[App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/tags',[App\Http\Controllers\TagController::class, 'index'])->name('tags');
Route::get('/tag/create',[App\Http\Controllers\TagController::class, 'create'])->name('tag.create');
Route::post('/tag/store',[App\Http\Controllers\TagController::class, 'store'])->name('tag.store');
Route::get('/tag/edit/{id}',[App\Http\Controllers\TagController::class, 'edit'])->name('tag.edit');
Route::post('/tag/update/{id}',[App\Http\Controllers\TagController::class, 'update'])->name('tag.update');
Route::get('/tag/destroy/{id}',[App\Http\Controllers\TagController::class, 'destroy'])->name('tag.destroy');
