<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
      'title' => 'home',
      'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
      'title' => 'about',
      'active' => 'about',
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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentice']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');