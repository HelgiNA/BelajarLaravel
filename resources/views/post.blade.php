@extends('layouts.main')

@section('main')
<h1 class="mb-5">halaman Single Post</h1>
  <article>
    <h2>{{ $post->title }}</h1>
    
      <p>by. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    
    {!! $post->body !!}
  </article>
  
  <a href="/post">back to the blog</a>
@endsection