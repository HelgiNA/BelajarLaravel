<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
      return view('blog', [
        'title' => 'All Posts',
        'active' => 'posts',
        'posts' => Post::latest('created_at')->get()
      ]);
    }
    
    public function show(Post $post)
    {
      return view('post', [
        'title' => 'single post',
        'active' => 'posts',
        'post' => $post
      ]);
    }
}
