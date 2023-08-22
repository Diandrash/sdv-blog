<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-secondary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link " href="/dashboard">
            <span data-feather="file" class="align-text-bottom"></span>
            <h5 class="primary-text">
              Home
            </h5>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/dashboard/posts">
            <span data-feather="home" class="align-text-bottom"></span>
            <h5 class="secondary-text">
              My Post
            </h5>
          </a>
        </li>

        @can('Admin')    
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard/components">
              <span data-feather="home" class="align-text-bottom"></span>
              <h5 class="secondary-text">
                Components
              </h5>
            </a>
          </li>
        @endcan

    </div>
  </nav>