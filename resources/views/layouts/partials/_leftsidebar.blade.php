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
            <div class="info">
                <a href="#" class="d-block">{{ 'Adminstrator' }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @guest
                <li class='nav-item has-treeview'>
                    <a href="/" class='nav-link'>
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
            @endguest

            @auth
                    <li class='nav-item has-treeview'>
                        <a href="/soma/user-profiles/show-user-profile" class='nav-link'>
                            <i class="fa fa-user nav-icon"></i>
                            <p>User profile</p>
                        </a>
                     </li>

                <li
                    class='nav-item has-treeview'>
                    <a href="#"
                        class='nav-link'>
                        <i class="nav-icon fa-solid fa-person-military-rifle"></i>
                        <p>
                            Authentication
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/auth/users/list" class='nav-link'>
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/auth/permissions/list"
                                class='nav-link'>
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Permissions
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/auth/roles/list" class='nav-link'>
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Roles
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li
                    class='nav-item has-treeview'>
                    <a href="#"
                        class='nav-link'>
                        <i class="fa-solid fa-money-bill-1-wave nav-icon"></i>
                        <p>
                            Posts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class='nav-item'>
                            <a href="/billing/items/list" class='nav-link'>
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>
                                    Items
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class='nav-item has-treeview'>
                    <a href="/auth/logout" class='nav-link'>
                        <i class="fas fa-power-off nav-icon"></i>
                        <p>Logout</p>
                    </a>
                </li>
            @endauth

            </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->


    </div>
    <!-- /.sidebar -->
</aside>
