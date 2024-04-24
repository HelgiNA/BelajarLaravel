<header class="p-3 bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
      <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="40" height="32">
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/home" class="nav-link px-2 {{ ($active == 'home') ? 'text-secondary' : 'text-white' }}">Home</a></li>
        <li><a href="/posts" class="nav-link px-2 {{ ($active == 'posts') ? 'text-secondary' : 'text-white' }}">Blogs</a></li>
        <li><a href="/categories" class="nav-link px-2 {{ ($active == 'categories') ? 'text-secondary' : 'text-white' }}">Categories</a></li>
        <li><a href="/about" class="nav-link px-2 {{ ($active == 'about') ? 'text-secondary' : 'text-white' }}">About</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark" placeholder="Search...">
      </form>
      
      @auth
        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle text-white" data-bs-toggle="dropdown">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="post">
              @csrf
              <li><button type="submit" class="dropdown-item">Sign out</button></li>
            </form>
          </ul>
        </div>
      @else
        <div class="text-end">
          <a class="text-decoration-none" href="/login"><button type="button" class="btn {{ ($active == 'login') ? 'btn-outline-light me-2' : 'btn-warning' }}">Login</button></a>
          <a class="text-decoration-none" href="/register"><button type="button" class="btn {{ ($active == 'register') ? 'btn-outline-light me-2' : 'btn-warning' }}">Sign-up</button></a>
        </div>
      @endauth
    </div>
  </div>
</header>