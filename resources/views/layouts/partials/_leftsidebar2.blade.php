<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('images/lsdm-logo-02.jpg') }}" alt="LSDM" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">LSDM</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            @auth
            <div class="info">
                <a href="#" class="d-block">{{ Str::ucfirst(auth()->user()->username) ?? 'Adminstrator' }}</a>
            </div>
            @endauth

            @guest
            <div class="info">
                 <a href="#" class="d-block">{{ 'Guest' }}</a>
            </div>
            @endguest
    </div>

     <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{-- Dashboard --}}
        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    </p>
            </a>
        </li>
        {{-- User Profile --}}
        @auth
           <li class="nav-item">
            <a href="/soma/user-profiles/show-user-profile" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                User Profile
              </p>
            </a>
          </li>
          {{-- Authentication --}}
          <li class="nav-item has-treeview mt-2">
            <a href="#" class="nav-link">
             &nbsp;
            <p>
                Authentication
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/auth/users/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/auth/permissions/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permissions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/auth/roles/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- Posts --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                &nbsp;
              <p>
                Posts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/auth/users/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/auth/permissions/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reports</p>
                </a>
              </li>

            </ul>
          </li>

          <li class='nav-item mt-3'>
            <a href="/auth/logout" class='nav-link'>
                <i class="nav-icon fas fa-power-off text-danger"></i>
                <p>Logout</p>
            </a>
         </li>
        @endauth
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>
