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

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', fn ()
  => view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::latest('created_at')->get()
  ])
);