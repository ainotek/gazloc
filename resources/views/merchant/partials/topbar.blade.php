<nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
    <div class="container-fluid">

        <!-- Form -->
        <form class="form-inline mr-4 d-none d-md-flex">
                <!-- Menu -->
        </form>

        <!-- User -->
        <div class="navbar-user">

            <!-- Dropdown -->
            <div class="dropdown mr-4 d-none d-md-flex">
            </div>

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{($user->picture ?? asset('img/user.png'))}}" alt="..." class="avatar-img rounded-circle">
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                    {{--
                      <a href="#" class="dropdown-item">Profile</a>
                      <hr class="dropdown-divider">
                    --}}
                    <a href="{{route('logout')}}" class="dropdown-item">Deconnexion</a>
                </div>

            </div>

        </div>

    </div>
</nav>
