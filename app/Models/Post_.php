<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
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
    
    public static function all()
    {
      return collect(self::$blog_post);
    }
    
    public static function find($slug)
    {
      $posts = collect(static::all());
      return $posts->firstWhere('slug', $slug);
    }
}
