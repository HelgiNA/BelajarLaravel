@extends('layouts.main')

@section('main')
<div class="container my-3">
  <div class="row">
    <div class="col-md-8">
      <h2>{{ $post->title }}</h2>
      
      <p>
        by. <a href="#" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
      </p>
       
      <img src="https://picsum.photos/1200/400" class="img-fluid" alt="...">
       
      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
      
      <a href="/post/" class="btn btn-primary">Back To The Blog</a>
    </div>
  </div>
</div>
@endsection