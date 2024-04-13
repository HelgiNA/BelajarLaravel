@extends('layouts.main')

@section('main')
  @foreach ($posts as $post)
    <article class="mb-5">
      <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post['title'] }}</a>
      </h2>
      <h5>{{ $post->creator }}</h5>
      <p>{{ $post->excerpt }}</p>
    </article>
  @endforeach
@endsection