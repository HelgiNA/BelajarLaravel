<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\PostController;


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

Route::get('/category/{category:slug}', function (Category $category) {
  return view('category', [
      'tittle' => 'Category ' . $category->name,
      'title' => $category->name,
      'posts' => $category->posts,
      'category' => $category->name
    ]);
});
?>