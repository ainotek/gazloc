
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('/fonts/feather/feather.min.css')}}">
    <link rel="stylesheet" href="{{asset('/libs/flatpickr/dist/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('/libs/quill/dist/quill.core.css')}}">
    <link rel="stylesheet" href="{{asset('/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/libs/highlight.js/styles/vs2015.css')}}">

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->

    <link rel="stylesheet" href="{{asset('/css/theme.min.css')}}" id="stylesheetLight">
    <!-- <link rel="stylesheet" href="{{asset('/css/theme-dark.min.css')}}" id="stylesheetDark"> -->
    <link rel="shortcut icon" href="{{asset('')}}/img/logo.svg">

    <title>Espace Marchant</title>
</head>
<body style="display: block;">
@include('flash::message')

<!-- MODALS
================================================== -->
<!-- Modal: Demo -->
<div class="modal fade fixed-right" id="modalDemo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <form class="modal-content" id="demoForm">
            <div class="modal-body">

                <!-- Close -->
                <a class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>

                <div class="text-center">
                    <img src="{{asset('')}}/img/illustrations/designer-life.svg" alt="..." class="img-fluid mb-3">
                </div>

                <h2 class="text-center mb-2">
                    Parametrer votre Interface
                </h2>

                <p class="text-center mb-4">
                    Définissez vos préférences.
                </p>

                <hr class="mb-4">

                <h4 class="mb-1">
                    Theme
                </h4>

                <p class="small text-muted mb-3">
                    Présentation claire ou sombre.
                </p>

                <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                    <label class="btn btn-white active col">
                        <input type="radio" name="colorScheme" id="colorSchemeLight" value="light" checked="">
                        <i class="fe fe-sun mr-2"></i> Claire
                    </label>
                    <label class="btn btn-white col ml-2">
                        <input type="radio" name="colorScheme" id="colorSchemeDark" value="dark">
                        <i class="fe fe-moon mr-2"></i> Sombre
                    </label>
                </div>
                <div class="collapse show" id="sidebarSizeContainer">

                    <h4 class="mb-1">
                        Sidenav Sizing <span class="badge badge-soft-primary">New</span>
                    </h4>

                    <p class="small text-muted mb-3">
                        Standard navigation sizing or minified icons with dropdowns.
                    </p>

                    <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                        <label class="btn btn-white active col">
                            <input type="radio" name="sidebarSize" id="sidebarSizeBase" value="base" checked=""> Fullsize
                        </label>
                        <label class="btn btn-white col ml-2">
                            <input type="radio" name="sidebarSize" id="sidebarSizeSmall" value="small"> Icons
                        </label>
                    </div>

                </div>

                <h4 class="mb-1">
                    Navigation Color <span class="badge badge-soft-primary">New</span>
                </h4>

                <p class="small text-muted mb-3">
                    Usually dictated by the color scheme, but can be overriden.
                </p>

                <div class="btn-group-toggle d-flex" data-toggle="buttons">
                    <label class="btn btn-white active col">
                        <input type="radio" name="navColor" id="navColorDefault" value="default" checked=""> Default
                    </label>
                    <label class="btn btn-white col ml-2">
                        <input type="radio" name="navColor" id="navColorInverted" value="inverted"> Inverted
                    </label>
                    <label class="btn btn-white col ml-2">
                        <input type="radio" name="navColor" id="navColorVibrant" value="vibrant"> Vibrant
                    </label>
                </div>

            </div>
            <div class="modal-footer border-0">

                <button type="submit" class="btn btn-block btn-primary mt-auto">
                    Preview
                </button>

            </div>
        </form>
    </div>
</div>

<!-- Modal: Members -->
<div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-card card" data-toggle="lists" data-options="{&quot;valueNames&quot;: [&quot;name&quot;]}">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">

                            <!-- Title -->
                            <h4 class="card-header-title" id="exampleModalCenterTitle">
                                Add a member
                            </h4>

                        </div>
                        <div class="col-auto">

                            <!-- Close -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>

                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-header">

                    <!-- Form -->
                    <form>
                        <div class="input-group input-group-flush input-group-merge">
                            <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fe fe-search"></span>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="card-body">

                    <!-- List group -->
                    <ul class="list-group list-group-flush list my-n3"><li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Miyah Myles</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li><li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('')}}/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Ryu Duke</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li><li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('')}}/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Glen Rouse</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-warning">●</span> Busy
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li><li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('')}}/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Grace Gross</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-danger">●</span> Offline
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li></ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Search -->
<div class="modal fade" id="sidebarModalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
            <div class="modal-body" data-toggle="lists" data-options="{&quot;valueNames&quot;: [&quot;name&quot;]}">

                <!-- Form -->
                <form class="mb-4">
                    <div class="input-group input-group-merge input-group-rounded">
                        <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fe fe-search"></span>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- List group -->
                <div class="my-n3">
                    <div class="list-group list-group-flush list"><a href="team-overview.html" class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('')}}/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Airbnb
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->
                        </a><a href="team-overview.html" class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('')}}/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Medium Corporation
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->
                        </a><a href="project-overview.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-4by3">
                                        <img src="{{asset('')}}/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Homepage Redesign
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a><a href="project-overview.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-4by3">
                                        <img src="{{asset('')}}/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Travels &amp; Time
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a><a href="project-overview.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-4by3">
                                        <img src="{{asset('')}}/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Safari Exploration
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a><a href="profile-posts.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Dianna Smiley
                                    </h4>

                                    <!-- Status -->
                                    <p class="text-body small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a><a href="profile-posts.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Ab Hadley
                                    </h4>

                                    <!-- Status -->
                                    <p class="text-body small mb-0">
                                        <span class="text-danger">●</span> Offline
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a></div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal: Activity -->
<div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Title -->
                <h4 class="modal-title">
                    Notifications
                </h4>

                <!-- Link -->
                <a href="#!">
                    Mark all as read
                </a>

            </div>
            <div class="modal-body">

                <!-- List group -->
                <div class="list-group list-group-flush my-n3">
                    <a class="list-group-item text-reset px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Content -->
                                <div class="small">
                                    <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess, and 3 others.
                                </div>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Content -->
                                <div class="small">
                                    <strong>Ab Hadley</strong> reacted to your post with a 😍
                                </div>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Content -->
                                <div class="small">
                                    <strong>Adolfo Hess</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                </div>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Content -->
                                <div class="small">
                                    <strong>Daniela Dewitt</strong> subscribed to you.
                                </div>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Content -->
                                <div class="small">
                                    <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                                </div>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Content -->
                                <div class="small">
                                    <strong>Ryu Duke</strong> reacted to your post with a 😍
                                </div>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Content -->
                                <div class="small">
                                    <strong>Glen Rouse</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                </div>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item text-reset px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Content -->
                                <div class="small">
                                    <strong>Grace Gross</strong> subscribed to you.
                                </div>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal: Kanban task -->
<div class="modal fade" id="modalKanbanTask" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
            <div class="modal-body">

                <!-- Header -->
                <div class="row">
                    <div class="col">

                        <!-- Prettitle -->
                        <h6 class="text-uppercase text-muted mb-3">
                            <a href="#!" class="text-reset">How to Use Kanban</a>
                        </h6>

                        <!-- Title -->
                        <h2 class="mb-2">
                            Update Dashkit to include new components!
                        </h2>

                        <!-- Subtitle -->
                        <p class="text-muted mb-0">
                            This is a description of this task. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum magna nisi, ultrices ut pharetra eget.
                        </p>

                    </div>
                    <div class="col-auto">

                        <!-- Close -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    ×
                  </span>
                        </button>

                    </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr class="my-4">

                <!-- Buttons -->
                <div class="mb-4">
                    <div class="row">
                        <div class="col">

                            <a href="#!" class="btn btn-sm btn-white">
                                😬 1
                            </a>
                            <a href="#!" class="btn btn-sm btn-white">
                                👍 2
                            </a>
                            <a href="#!" class="btn btn-sm btn-white">
                                Add Reaction
                            </a>

                        </div>
                        <div class="col-auto mr-n3">

                            <div class="avatar-group d-none d-sm-flex">
                                <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>
                                <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>
                                <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>
                                <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                    <img src="{{asset('')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                </a>
                            </div>

                        </div>
                        <div class="col-auto">

                            <a href="#!" class="btn btn-sm btn-white">
                                Share
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Files
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-white">
                                    Add files
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar">
                                    <img src="{{asset('')}}/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Launchday logo</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    1.5mb PNG Dave
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
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

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar">
                                    <img src="{{asset('')}}/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml-n2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Launchday logo</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    1.5mb PNG Dave
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
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

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" alt="...">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Form -->
                                <form class="mt-1">
                                    <textarea class="form-control form-control-flush form-control" data-toggle="autosize" rows="1" placeholder="Leave a comment" style="overflow: hidden; overflow-wrap: break-word;"></textarea>
                                </form>

                            </div>
                            <div class="col-auto align-self-end">

                                <!-- Icons -->
                                <div class="text-muted mb-2">
                                    <a href="#!" class="text-reset mr-3">
                                        <i class="fe fe-camera"></i>
                                    </a>
                                    <a href="#!" class="text-reset mr-3">
                                        <i class="fe fe-paperclip"></i>
                                    </a>
                                    <a href="#!" class="text-reset">
                                        <i class="fe fe-mic"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <!-- Comments -->
                        <div class="comment mb-3">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm" href="profile-posts.html">
                                        <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Body -->
                                    <div class="comment-body">

                                        <div class="row">
                                            <div class="col">

                                                <!-- Title -->
                                                <h5 class="comment-title">
                                                    Ab Hadley
                                                </h5>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Time -->
                                                <time class="comment-time">
                                                    11:12
                                                </time>

                                            </div>
                                        </div> <!-- / .row -->

                                        <!-- Text -->
                                        <p class="comment-text">
                                            Looking good Dianna! I like the image grid on the left, but it feels like a lot to process and doesn't really <em>show</em> me what the product does? I think using a short looping video or something similar demo'ing the product might be better?
                                        </p>

                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="comment">
                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm" href="profile-posts.html">
                                        <img src="{{asset('')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml-n2">

                                    <!-- Body -->
                                    <div class="comment-body">

                                        <div class="row">
                                            <div class="col">

                                                <!-- Title -->
                                                <h5 class="comment-title">
                                                    Adolfo Hess
                                                </h5>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Time -->
                                                <time class="comment-time">
                                                    11:12
                                                </time>

                                            </div>
                                        </div> <!-- / .row -->

                                        <!-- Text -->
                                        <p class="comment-text">
                                            Any chance you're going to link the grid up to a public gallery of sites built with Launchday?
                                        </p>

                                    </div>

                                </div>
                            </div> <!-- / .row -->
                        </div>

                    </div>
                </div>

                <!-- Card -->
                <div class="card mb-0">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Activity
                        </h4>

                    </div>
                    <div class="card-body">

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" alt="...">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Heading -->
                                <p class="small mb-0">
                                    <strong>Johathan Goldstein</strong> reacted to you post with 😊
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" alt="...">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Heading -->
                                <p class="small mb-0">
                                    <strong>Johnathan Goldstein</strong> uploaded the files “Launchday Logo” and “Revisiting the Past”.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" alt="...">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Heading -->
                                <p class="small mb-0">
                                    <strong>Kimmy Schmitt</strong> shared this task with Donnie Calvin, Casey Fyfe, Jimmy Smits, and 16 others.
                                </p>

                                <!-- Time -->
                                <small class="text-muted">
                                    2m ago
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal: Kanban task -->
<div class="modal fade" id="modalKanbanTaskEmpty" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
            <div class="modal-body">

                <!-- Header -->
                <div class="row">
                    <div class="col">

                        <!-- Prettitle -->
                        <h6 class="text-uppercase text-muted mb-3">
                            <a href="#!" class="text-reset">How to Use Kanban</a>
                        </h6>

                        <!-- Title -->
                        <h2 class="mb-2">
                            Update Dashkit to include new components!
                        </h2>

                        <!-- Subtitle -->
                        <textarea class="form-control form-control-flush form-control-auto" data-toggle="autosize" rows="1" placeholder="Add a description..." style="overflow: hidden; overflow-wrap: break-word;"></textarea>

                    </div>
                    <div class="col-auto">

                        <!-- Close -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    ×
                  </span>
                        </button>

                    </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr class="my-4">

                <!-- Buttons -->
                <div class="mb-4">
                    <div class="row">
                        <div class="col">

                            <a href="#!" class="btn btn-sm btn-white">
                                Add Reaction
                            </a>

                        </div>
                        <div class="col-auto">

                            <a href="#!" class="btn btn-sm btn-white">
                                Share
                            </a>

                        </div>
                    </div> <!-- / .row -->
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="dropzone dropzone-multiple dz-clickable" data-toggle="dropzone" data-options="{&quot;url&quot;: &quot;https://&quot;}">



                            <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush"></ul>

                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div></div>
                    </div>
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{asset('')}}/img/avatars/profiles/avatar-1.jpg" alt="...">
                                </div>

                            </div>
                            <div class="col ml-n2">

                                <!-- Form -->
                                <form class="mt-1">
                                    <textarea class="form-control form-control-flush" data-toggle="autosize" rows="1" placeholder="Leave a comment" style="overflow: hidden; overflow-wrap: break-word;"></textarea>
                                </form>

                            </div>
                            <div class="col-auto align-self-end">

                                <!-- Icons -->
                                <div class="text-muted mb-2">
                                    <a href="#!" class="text-reset mr-3">
                                        <i class="fe fe-camera"></i>
                                    </a>
                                    <a href="#!" class="text-reset mr-3">
                                        <i class="fe fe-paperclip"></i>
                                    </a>
                                    <a href="#!" class="text-reset">
                                        <i class="fe fe-mic"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- NAVIGATION
================================================== -->
@include('merchant.partials.leftsidebar')

<!-- MAIN CONTENT
================================================== -->
<div class="main-content">
    @include('merchant.partials.topbar')

    <!-- HEADER -->
    <!-- CARDS -->
    @yield('content')
</div> <!-- / .main-content -->

<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src="{{asset('/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js')}}"></script>
<script src="{{asset('/libs/autosize/dist/autosize.min.js')}}"></script>
<script src="{{asset('/libs/chart.js/dist/Chart.min.js')}}"></script>
{{--<script src="{{asset('/libs/dropzone/dist/min/dropzone.min.js')}}"></script>--}}
<script src="{{asset('/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{asset('/libs/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{asset('/libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('/libs/list.js/dist/list.min.js')}}"></script>
<script src="{{asset('/libs/quill/dist/quill.min.js')}}"></script>
<script src="{{asset('/libs/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('/libs/chart.js/Chart.extension.min.js')}}"></script>


<!-- Map -->
<script src="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js"></script>

<!-- Theme JS -->
<script type="text/javascript" src="{{asset('/js/theme.js/theme.min.js')}}"></script>
<input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var cty = document.getElementById('miChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Evolution de l\'activité',
                backgroundColor: '#2c7be5',
                borderColor: '#A6C5F7',
                data: [40, 10, 5, 2, 20, 30, 45],
            }]
        },

        // Configuration options go here
        options: {}
    });
    var myPieChart = new Chart(cty, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [10, 20, 30],
                backgroundColor: ['#2C7BE5','#A6C5F7','#D2DDEC']
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'B12',
                'B20',
                'B70'
            ]
        },
        options: {
            aspectRatio: 10,
            // layout: {
            //     padding: {
            //         left: 0,
            //         right: 0,
            //         top: 0,
            //         bottom: 0,
            //     }
            // },
            // responsive: true,
            // cutoutPercentage: 90,
            // legend: {
            //     display: true,
            // },
            // title: {
            //     display: true,
            // },
        }
    });
</script>
</body>
</html>
