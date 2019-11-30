
<!-- NAVIGATION
    ================================================== -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('')}}/img/logo.svg" class="navbar-brand-img
              mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="settings.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fe fe-search"></span>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('merchant.dashboard') ? 'active' : '' }}"
                       href="{{route('merchant.dashboard')}}" role="button" aria-controls="sidebarDashboards">
                        <i class="fe fe-home"></i>Tableau de bord
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('merchant.orders') ? 'active' : '' }}"
                       href="{{route('merchant.orders')}}"  role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="fe fe-dollar-sign"></i> Commandes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('merchant.staff.list') ? 'active' : '' }}"
                       href="{{route('merchant.staff.list')}}" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="fe fe-users"></i> Equipe
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('merchant.suppliers') ||
                     Request::routeIs('merchant.product') ? 'active' : '' }}"
                       href="{{route('merchant.suppliers')}}" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="fe fe-box"></i> Stock
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                        <span class="fe fe-bell"></span> Notifications
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
                <i class="fe fe-server"></i> Paramètres
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('merchant.setting') ? 'active' : '' }}"
                       href="{{route('merchant.setting')}}" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                        <i class="fe fe-share-2"></i> Paramètres
                    </a>
                </li>
            </ul>

            <!-- Push content down -->
            <div class="mt-auto">
                <a href="{{route('home')}}" class="btn btn-secondary mb-4">
                    <i class="fe fe-home"></i> Accueil
                </a>
                <a href="{{route('logout')}}" class="btn btn-secondary mb-4">
                    <i class="fe fe-log-out"></i> Sortir
                </a>
            </div>
            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser" style="display: none !important">

                <!-- Icon -->
                <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                  <span class="icon">
                    <i class="fe fe-bell"></i>
                  </span>
                </a>

                <!-- Dropup -->
                <div class="dropup">

                    <!-- Toggle -->
                    <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <img src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                        </div>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="settings.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="sign-in.html" class="dropdown-item">Logout</a>
                    </div>
                </div>
                <!-- Icon -->
                <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                  <span class="icon">
                    <i class="fe fe-search"></i>
                  </span>
                </a>
            </div>
        </div> <!-- / .navbar-collapse -->
    </div>
</nav>
