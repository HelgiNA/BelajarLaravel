@extends('layouts.main')

@section('main')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-registrasion">
      <form>
        <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
    
        <div class="form-floating">
          <input type="email" class="form-control rounded-top" id="floatingInput" placeholder="Lorem">
          <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="Lorem Ipsum">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        
        <p><button class="btn btn-primary w-100 mt-3" type="submit">Sign up</button></p>
        
        <p class="d-block text-center">Already have an account, <a href="/login">Login now</a></p>
      </form>
    </main>
  </div>
</div>
@endsection