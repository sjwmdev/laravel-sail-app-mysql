<!-- Left navbar links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="/" class="nav-link">Home</a>
  </li>
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
  <!-- Navbar Search -->
  <li class="nav-item">
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
      <i class="fas fa-search"></i>
    </a>
    <div class="navbar-search-block">
      <form class="form-inline">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </li>

  <!-- UserLogout Dropdown Menu -->
  <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <img src="{{ asset('adminlte/dist/img/avatar.png') }}" style="height: 20px; width: 20px;" alt="user-image"
        class="img-size-50 mr-3 img-circle">
      <span class="fas fa-caret-down"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <a href="/password/edit" class="dropdown-item">
        <div class="media">
          <div class="media-body">
            <h3 class="dropdown-item-title">
              Credentials
              <span class="float-right text-sm text-green"><i class="fas fa-star"></i></span>
            </h3>
            <p class="text-sm text-muted"><i class="fas fa-key green"></i> Change Password</p>
          </div>
        </div>
      </a>
      <div class="dropdown-divider"></div>

      @auth
      <a href="/auth/logout" class="dropdown-item" role="button">
        <div class="media">
          <div class="media-body">
            <h3 class="dropdown-item-title">
              Logout
              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
            </h3>
            <p class="text-sm text-muted"><i class="fas fa-power-off red"></i>&nbsp;Logout</p>
          </div>
        </div>
      </a>
      @endauth

  </li>

</ul>
