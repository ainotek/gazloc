@extends('merchant.index')
@section('content')
        <!-- HEADER -->
        <div class="header">

            <!-- Image -->
            <div class="container-fluid">

                <!-- Body -->
                <div class="header-body">
                    <div class="row align-items-end">
                        <div class="col">

                            <!-- Pretitle -->
                            <h6 class="header-pretitle">
                                Overview
                            </h6>

                            <!-- Title -->
                            <h1 class="header-title">
                                Fournisseurs
                            </h1>

                        </div>
                        <div class="col-auto">

                            <!-- Button -->
                            <a href="#!" class="btn btn-primary lift">
                                <i class="fe fe-plus-circle"></i>
                                Ajouter
                            </a>

                        </div>
                    </div> <!-- / .row -->

                    <div class="row align-items-center">
                        <div class="col">

                            <!-- Nav -->
                            <ul class="nav nav-tabs nav-overflow header-tabs">
                                <li class="nav-item">
                                    <a href="profile-posts.html" class="nav-link">
                                        Posts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="profile-groups.html" class="nav-link active">
                                        Groups
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="profile-projects.html" class="nav-link">
                                        Projects
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="profile-files.html" class="nav-link">
                                        Files
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="profile-subscribers.html" class="nav-link">
                                        Subscribers
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div> <!-- / .header-body -->

            </div>
        </div>

        <!-- CONTENT -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Dropdown -->
                            <div class="dropdown card-dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="text-center">
                                <a href="team-overview.html" class="card-avatar avatar avatar-lg mx-auto">
                                    <img src="{{asset('')}}/img/avatars/teams/team-logo-1.jpg" alt="" class="avatar-img rounded">
                                </a>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title text-center mb-3">
                                <a href="team-overview.html">Launchday</a>
                            </h2>

                            <!-- Text -->
                            <p class="card-text text-center text-muted mb-4">
                                Launchday is a SaaS website builder with a focus on quality, easy to build product sites.
                            </p>

                            <!-- Divider -->
                            <hr>

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <i class="fe fe-clock"></i> Updated 2hr ago
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Avatar group -->
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle">+7</div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div> <!-- / .card-body -->
                    </div>

                </div>
                <div class="col-12 col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Dropdown -->
                            <div class="dropdown card-dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="text-center">
                                <a href="team-overview.html" class="card-avatar avatar avatar-lg mx-auto">
                                    <img src="{{asset('')}}/img/avatars/teams/team-logo-2.jpg" alt="" class="avatar-img rounded">
                                </a>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title text-center mb-3">
                                <a href="team-overview.html">Medium Corporation</a>
                            </h2>

                            <!-- Text -->
                            <p class="card-text text-center text-muted mb-4">
                                Medium is an online publishing platform developed by Evan Williams, and launched in August 2012.
                            </p>

                            <!-- Divider -->
                            <hr>

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <i class="fe fe-clock"></i> Updated 4hr ago
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Avatar group -->
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle">+7</div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div> <!-- / .card-body -->
                    </div>

                </div>
                <div class="col-12 col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Dropdown -->
                            <div class="dropdown card-dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="text-center">
                                <a href="team-overview.html" class="card-avatar avatar avatar-lg mx-auto">
                                    <img src="{{asset('')}}/img/avatars/teams/team-logo-3.jpg" alt="" class="avatar-img rounded">
                                </a>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title text-center mb-3">
                                <a href="team-overview.html">Lyft</a>
                            </h2>

                            <!-- Text -->
                            <p class="card-text text-center text-muted mb-4">
                                Lyft is an on-demand transportation company based in San Francisco, California.
                            </p>

                            <!-- Divider -->
                            <hr>

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <i class="fe fe-clock"></i> Updated 5hr ago
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Avatar group -->
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle">+7</div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div> <!-- / .card-body -->
                    </div>

                </div>
                <div class="col-12 col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Dropdown -->
                            <div class="dropdown card-dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="text-center">
                                <a href="team-overview.html" class="card-avatar avatar avatar-lg mx-auto">
                                    <img src="{{asset('')}}/img/avatars/teams/team-logo-4.jpg" alt="" class="avatar-img rounded">
                                </a>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title text-center">
                                <a href="team-overview.html">PayPal</a>
                            </h2>

                            <!-- Text -->
                            <p class="card-text text-center text-muted mb-4">
                                PayPal is a worldwide online payments system that supports online money transfers and services.
                            </p>

                            <!-- Divider -->
                            <hr>

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <i class="fe fe-clock"></i> Updated 4hr ago
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Avatar group -->
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle">+7</div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div> <!-- / .card-body -->
                    </div>

                </div>
                <div class="col-12 col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Dropdown -->
                            <div class="dropdown card-dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="text-center">
                                <a href="team-overview.html" class="card-avatar avatar avatar-lg mx-auto">
                                    <img src="{{asset('')}}/img/avatars/teams/team-logo-5.jpg" alt="" class="avatar-img rounded">
                                </a>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title text-center mb-3">
                                <a href="team-overview.html">Dropbox Inc.</a>
                            </h2>

                            <!-- Text -->
                            <p class="card-text text-center text-muted mb-4">
                                Dropbox is a file hosting service that offers cloud storage, file synchronization, a personal cloud.
                            </p>

                            <!-- Divider -->
                            <hr>

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <i class="fe fe-clock"></i> Updated 1d ago
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Avatar group -->
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle">+7</div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div> <!-- / .card-body -->
                    </div>

                </div>
                <div class="col-12 col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Dropdown -->
                            <div class="dropdown card-dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="text-center">
                                <a href="team-overview.html" class="card-avatar avatar avatar-lg mx-auto">
                                    <img src="{{asset('')}}/img/avatars/teams/team-logo-6.jpg" alt="" class="avatar-img rounded">
                                </a>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title text-center mb-3">
                                <a href="team-overview.html">Squarespace</a>
                            </h2>

                            <!-- Text -->
                            <p class="card-text text-center text-muted mb-4">
                                Squarespace provides software as a service for website building and hosting. Headquartered in NYC.
                            </p>

                            <!-- Divider -->
                            <hr>

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <i class="fe fe-clock"></i> Updated 2d ago
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Avatar group -->
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle">+7</div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div> <!-- / .card-body -->
                    </div>

                </div>
                <div class="col-12 col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Dropdown -->
                            <div class="dropdown card-dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="text-center">
                                <a href="team-overview.html" class="card-avatar avatar avatar-lg mx-auto">
                                    <img src="{{asset('')}}/img/avatars/teams/team-logo-7.jpg" alt="" class="avatar-img rounded">
                                </a>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title text-center mb-3">
                                <a href="team-overview.html">Github</a>
                            </h2>

                            <!-- Text -->
                            <p class="card-text text-center text-muted mb-4">
                                GitHub is a web-based hosting service for version control of code using Git.
                            </p>

                            <!-- Divider -->
                            <hr>

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <i class="fe fe-clock"></i> Updated 3d ago
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Avatar group -->
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle">+7</div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div> <!-- / .card-body -->
                    </div>

                </div>
                <div class="col-12 col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Dropdown -->
                            <div class="dropdown card-dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="text-center">
                                <a href="team-overview.html" class="card-avatar avatar avatar-lg mx-auto">
                                    <img src="{{asset('')}}/img/avatars/teams/team-logo-8.jpg" alt="" class="avatar-img rounded">
                                </a>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title text-center">
                                <a href="team-overview.html">Slack</a>
                            </h2>

                            <!-- Text -->
                            <p class="card-text text-center text-muted mb-4">
                                Slack is a cloud-based set of team collaboration tools and services, founded by Stewart Butterfield.
                            </p>

                            <!-- Divider -->
                            <hr>

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <i class="fe fe-clock"></i> Updated 1w ago
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Avatar group -->
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-title rounded-circle">+7</div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div> <!-- / .card-body -->
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>
@endsection
