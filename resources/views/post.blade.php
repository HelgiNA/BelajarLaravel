@extends('layouts.main')

@section('main')
  <article>
    <h2>{{ $post['tittle'] }}</h1>
    <p>{{ $post['body'] }}</p>
  </article>
  
  <a href="/post">back to the blog</a>
@endsection