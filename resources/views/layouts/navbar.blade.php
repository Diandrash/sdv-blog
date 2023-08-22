<nav class="navbar navbar-expand-md  fixed-top bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SDV Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active fw-light" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-light" href="/posts">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-light" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-light" href="/register">Register</a>
          </li>
        </ul>

        <form class="d-flex" role="search" action="/login">
          <button class="btn btn-secondary px-4 rounded-5" type="submit">Login</button>
          {{-- <a class="nav-link fw-bolder text-secondary" href="/login">Login</a> --}}
        </form>
      </div>
    </div>
</nav>