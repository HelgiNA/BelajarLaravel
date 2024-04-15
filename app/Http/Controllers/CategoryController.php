<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
      return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::latest('created_at')->get()
      ]);
    }
    
    public function show(Category $category)
    {
      return view('blog', [
        'title' => 'Posts with category ' . $category->name,
        'active' => 'posts',
        'posts' => $category->posts
      ]);
    }
}