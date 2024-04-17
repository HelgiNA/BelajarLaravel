  @extends('layouts.main')
  
  @section('main')
  
  <div class="container">
    <div class="row">
      <h2 class="mb-3">{{ $title }}</h2>
      @foreach ($categories as $category)
        <div class="col-md-4 mb-3">
          <a href="/category/{{ $category->slug }}">
            <div class="card text-bg-dark">
              <img src="https://picsum.photos/id/{{ mt_rand(1, 200) }}/500/500" class="card-img" alt="...">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name}}</h5>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
  
  @endsection