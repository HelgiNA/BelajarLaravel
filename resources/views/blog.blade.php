  @extends('layouts.main')
  
  @section('main')
  <div class="container">
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    
    <div class="row mb-3 justify-content-center">
      <div class="col-md-6">
        <form target="/posts">
          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group">
            <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Button</button>
          </div>
        </form>
      </div>
    </div>
    
    @if (count($posts))
      <div class="card mb-3">
        <img src="https://picsum.photos/1200/400" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h3 class="card-title"><a class="text-decoration-none text-dark" href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
          
          <p>
            <small class="text-body-secondary">
              by. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>
          
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          
          <a class="text-decoration-none btn btn-primary" href="/post/{{ $posts[0]->slug }}">Read more</a>
        </div>
      </div>
      
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none position-absolute text-white py-2 px-3" style="background-color: rgba(0,0,0,0.7)">{{ $post->category->name }}</a>
            <img src="https://picsum.photos/id/{{ mt_rand(1, 200) }}/500/400" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post['title'] }}</a></h5>
              
              <p>
                <small class="text-body-secondary">
                  by. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                </small>
              </p>
              
              <p class="card-text">{{ $post->excerpt }}</p>
              
              <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
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