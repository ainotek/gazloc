@extends('merchant.index')
@section('content')
    <!-- HEADER -->
    <div class="header">

        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle">
                            Tous
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title">
                            Equipe
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
                                <a href="team-overview.html" class="nav-link">
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="team-projects.html" class="nav-link">
                                    Projects
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="team-members.html" class="nav-link active">
                                    Members
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    Settings
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div> <!-- / .header-body -->

        </div>

    </div> <!-- / .header -->

    <!-- CONTENT -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-8">

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="profile-posts.html" class="avatar avatar-lg">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="profile-posts.html">Dianna Smiley</a>
                                </h4>

                                <!-- Text -->
                                <p class="card-text small text-muted mb-1">
                                    You either die Spongebob or you live long enough to...
                                </p>

                                <!-- Status -->
                                <p class="card-text small">
                                    <span class="text-success">●</span> Online
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-primary d-none d-md-inline-block">
                                    Subscribe
                                </a>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" data-expanded="false">
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

                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .card-body -->
                </div>

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="profile-posts.html" class="avatar avatar-lg">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="profile-posts.html">Ab Hadley</a>
                                </h4>

                                <!-- Text -->
                                <p class="card-text small text-muted mb-1">
                                    Working on the latest API integration.
                                </p>

                                <!-- Status -->
                                <p class="card-text small">
                                    <span class="text-success">●</span> Online
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-primary d-none d-md-inline-block">
                                    Subscribe
                                </a>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" data-expanded="false">
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

                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .card-body -->
                </div>

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="profile-posts.html" class="avatar avatar-lg">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="profile-posts.html">Adolfo Hess</a>
                                </h4>

                                <!-- Text -->
                                <p class="card-text small text-muted mb-1">
                                    Vactioning with the fam
                                </p>

                                <!-- Status -->
                                <p class="card-text small">
                                    <span class="text-success">●</span> Online
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-primary d-none d-md-inline-block">
                                    Subscribe
                                </a>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" data-expanded="false">
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

                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .card-body -->
                </div>

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="profile-posts.html" class="avatar avatar-lg">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="profile-posts.html">Daniela Dewitt</a>
                                </h4>

                                <!-- Text -->
                                <p class="card-text small text-muted mb-1">
                                    Arts District project management stuff.
                                </p>

                                <!-- Status -->
                                <p class="card-text small">
                                    <span class="text-warning">●</span> Busy
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-primary d-none d-md-inline-block">
                                    Subscribe
                                </a>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" data-expanded="false">
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

                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .card-body -->
                </div>

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="profile-posts.html" class="avatar avatar-lg">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="profile-posts.html">Miyah Myles</a>
                                </h4>

                                <!-- Text -->
                                <p class="card-text small text-muted mb-1">
                                    You either die Spongbob...or become Squidward
                                </p>

                                <!-- Status -->
                                <p class="card-text small">
                                    <span class="text-danger">●</span> Offline
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-primary d-none d-md-inline-block">
                                    Subscribe
                                </a>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" data-expanded="false">
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

                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .card-body -->
                </div>

            </div>
            <div class="col-12 col-xl-4">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">

                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="mb-0">
                                    Member Count
                                </h5>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    129
                                </small>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="mb-0">
                                    Created
                                </h5>

                            </div>
                            <div class="col-auto">

                                <time class="small text-muted" datetime="2018-10-28">
                                    10/24/18
                                </time>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="mb-0">
                                    Slack Channel
                                </h5>

                            </div>
                            <div class="col-auto">

                                <a href="#!" class="small">
                                    #bloomers
                                </a>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="mb-0">
                                    Privacy
                                </h5>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    Public
                                </small>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="mb-0">
                                    Owner
                                </h5>

                            </div>
                            <div class="col-auto">

                                <a href="#!" class="small">
                                    Dianna Smiley
                                </a>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
