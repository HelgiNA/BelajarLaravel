<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
Route::get('/posts/{slug}', [PostController::class, 'show'])
?>