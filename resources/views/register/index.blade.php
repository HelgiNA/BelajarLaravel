@extends('layouts.main')

@section('main')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-registrasion">
      <form action="/register" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Form Registration</h1>
        
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="floatingInput" placeholder="Lorem" name="name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Lorem Ipsum" name="username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <p><button class="btn btn-primary w-100 mt-3" type="submit">Sign up</button></p>
        
        <p class="d-block text-center">Already have an account, <a href="/login">Login now</a></p>
      </form>
    </main>
  </div>
</div>
@endsection