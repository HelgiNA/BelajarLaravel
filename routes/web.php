<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/post', function () {
  $blog_content = [
      [
        'tittle' => 'juang',
        'slug' => 'juang',
        'creator' => 'hans',
        'body' => 'bla bla bla'
      ],
      [
        'tittle' => 'hehe',
        'slug' => 'hehe',
        'creator' => 'rue',
        'body' => 'bla bla bla'
      ]
    ];
    
    return view('blog', [
      'tittle' => 'blog',
      'posts' => $blog_content
      ]);
});

Route::get('/posts/{slug}', function ($slug) {
  $blog_content = [
      [
        'tittle' => 'juang',
        'slug' => 'juang',
        'creator' => 'hans',
        'body' => 'bla bla bla'
      ],
      [
        'tittle' => 'hehe',
        'slug' => 'hehe',
        'creator' => 'rue',
        'body' => 'bla bla bla'
      ]
    ];
    
    $new_post = [];
    foreach ($blog_content as $value) {
      if ($value['slug'] === $slug) {
        $new_post = $value;
      }
    }
    
    return view('post', [
      'tittle' => 'single post',
      'post' => $new_post
      ]);
})
?>