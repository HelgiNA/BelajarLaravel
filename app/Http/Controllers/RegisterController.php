<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
      return view('register.index', [
          'title' => 'Register',
          'active' => 'register'
        ]);
    }
    
    public function store(Request $request)
    {
      $validated = $request->validate([
        'name' => 'required|min:5|max:255',
        'username' => 'required|min:5|max:255|unique:users',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:255'
      ]);
      
      $validated['password'] = Hash::make($validated['password']);
      
      User::Create($validated);
      
      return redirect('/login')->with('success', 'Registration successful! Please log in again');
    }
}