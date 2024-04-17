<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
      $title = '';
      
      if (request('category')) {
        $category = Category::firstWhere('slug', request('category'));
        $title = ' In. ' . $category->name;
      }
      
      if (request('author')) {
        $user = User::firstWhere('username', request('author'));
        $title = ' By. ' . $user->name;
      }
      
      return view('blog', [
        'title' => 'All Posts' . $title,
        'active' => 'posts',
        'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()
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
