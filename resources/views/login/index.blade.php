@extends('layouts.main')

@section('main')
<div class="row justify-content-center">
  <div class="col-md-5">
    
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    <main>
      <form class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        
        <p><button class="btn btn-primary w-100" type="submit">Sign in</button></p>
        
        <p class="d-block text-center">Don't have an account, <a href="/register">create an account</a></p>
      </form>
    </main>
  </div>
</div>
@endsection