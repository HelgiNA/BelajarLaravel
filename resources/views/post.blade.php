@extends('layouts.main')

@section('main')
  <article>
    <h2>{{ $post->title }}</h1>
    {!! $post->body !!}
  </article>
  
  <a href="/post">back to the blog</a>
@endsection