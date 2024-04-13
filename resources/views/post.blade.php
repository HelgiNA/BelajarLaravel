@extends('layouts.main')

@section('main')
  <article>
    <h2>{{ $post->title }}</h1>
    
    <p>by. Hans in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
  </article>
  
  <a href="/post">back to the blog</a>
@endsection