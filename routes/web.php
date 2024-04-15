<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
      'tittle' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
      'tittle' => 'about',
      'name' => 'hans'
    ]);
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/author/{author:username}', [UserController::class, 'show']);
?>