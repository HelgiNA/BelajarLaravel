  @extends('layouts.main')
  
  @section('main')
  <div class="container">
    <h1 class="mb-3">{{ $title }}</h1>
    @if (count($posts))
      
      <div class="card mb-3">
        <img src="https://picsum.photos/1200/400" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
          
          <p>
            <small class="text-body-secondary">
              by. <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/category/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>
          
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          
          <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>
        </div>
      </div>
      
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="/category/{{ $post->category->slug }}" class="text-decoration-none position-absolute text-white py-2 px-3" style="background-color: rgba(0,0,0,0.7)">{{ $post->category->name }}</a>
            <img src="https://picsum.photos/id/{{ mt_rand(1, 200) }}/500/400" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post['title'] }}</a></h5>
              
              <p>
                <small class="text-body-secondary">
                  by. <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                </small>
              </p>
              
              <p class="card-text">{{ $post->excerpt }}</p>
              
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    @else
      <h3 class="text-center">not found posts</h3>
    @endif
  </div>
  
  @endsection