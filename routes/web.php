<?php

use App\Http\Controllers\ArticleController;
//use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [ArticleController::class, 'index'])->name('article.index');
Route::get('/blog/{category}', [ArticleController::class, 'category'])->name('article.category');
Route::get('/blog/tag/{tag}', [ArticleController::class, 'tag'])->name('article.tag');
Route::get('/search/', [ArticleController::class, 'search'])->name('article.search');
Route::get('/blog/{category}/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::middleware('guest')->group(function () {
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login');
    Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    //Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // ->can('create-post')
    //Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    //Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    //Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    //Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});
//Route::controller(CatalogController::class)->group(function () {});
