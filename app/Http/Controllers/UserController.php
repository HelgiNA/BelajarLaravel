<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
      
    }
    
    public function show(User $author)
    {
      return view('blog', [
      'title' => 'Posted By. Author' . $author->name,
      'active' => 'posts',
      'posts' => $author->posts->load('author','category')
      ]);
    }
}
