@extends('layouts.main')

@section('main')
<h1 class="mb-5">halaman kategori {{ $title }}</h1>
  @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-3">
      <h2><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post['title'] }}</a></h2>
      
      <p>by. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
      
      <p>{{ $post->excerpt }}</p>
      
      <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more...</a>
    </article>
  @endforeach
  <a href="/post">back to the blog</a>
@endsection