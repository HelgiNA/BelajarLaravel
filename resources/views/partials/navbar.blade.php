<div class="container rounded">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
      <a href="/home" class="d-inline-flex link-body-emphasis text-decoration-none">
        <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        <b class="mx-2 fs-6">Bootstrap</b>
      </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="/home" class="nav-link px-2 {{ ($active == 'home') ? 'link-secondary' : '' }}">Home</a></li>
      <li><a href="/posts" class="nav-link px-2 {{ ($active == 'posts') ? 'link-secondary' : '' }}">Blogs</a></li>
      <li><a href="/categories" class="nav-link px-2 {{ ($active == 'categories') ? 'link-secondary' : '' }}">Categories</a></li>
      <li><a href="/about" class="nav-link px-2 {{ ($active == 'about') ? 'link-secondary' : '' }}">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <a class="text-decoration-none" href="/login"><button type="button" class="btn {{ ($active == 'login') ? 'btn-outline-primary me-2' : 'btn-primary' }}">Login</button></a>
      <a href="/register"><button type="button" class="btn {{ ($active == 'register') ? 'btn-outline-primary me-2' : 'btn-primary' }}">Sign-up</button></a>
    </div>
  </header>
</div>