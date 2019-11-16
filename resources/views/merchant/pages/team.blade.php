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
                            Marchand
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title">
                            Equipe
                        </h1>

                    </div>
                    <div class="col-auto">

                        <!-- Button -->
                        <a href="#!" class="btn btn-primary lift" data-toggle="modal" data-target="#modalAddMembers">
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
                                <a href="#" class="nav-link active">
                                    Membres
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

                <!-- Single Store Team Member -->
                @foreach($teamMembers as $employee)
                    <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <span class="avatar avatar-lg">
                                    <img src="{{$employee->picture}}" alt="..." class="avatar-img rounded-circle">
                                </span>
                            </div>
                            <div class="col ml-n2">
                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="profile-posts.html">{{$employee->name}}</a>
                                </h4>

                                <!-- Text -->
                                <p class="card-text small text-muted mb-1">
                                    {{$employee->role}}
                                </p>

                                <!-- Status -->
                                <p class="card-text small">
                                    <span class="text-success">●</span>{{strtolower($employee->status)}}
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
                @endforeach

            </div>
            <div class="col-12 col-xl-4">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">

                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="mb-0">
                                    Total Membres
                                </h5>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    {{count($teamMembers)}}
                                </small>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="mb-0">
                                    Date d'expiration
                                </h5>

                            </div>
                            <div class="col-auto">

                                <time class="small text-muted" datetime="2018-10-28">
                                    {{ \Carbon\Carbon::parse($store->expire_at)->format('d/m/Y')}}
                                </time>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="mb-0">
                                    Marchand
                                </h5>

                            </div>
                            <div class="col-auto">

                                <a href="#!" class="small">
                                    {{$store->name}}
                                </a>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="mb-0">
                                    Note Marchand
                                </h5>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    {{$store->rating}} / 10
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

    <!-- Modal: Members -->
    <div class="modal fade" id="modalAddMembers" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-card card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title" id="exampleModalCenterTitle">
                                    Ajouter un membre
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Close -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-header">

                        <!-- Form -->
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="name" placeholder="Nom prénom">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Téléphone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="05000000">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>

                    </div>
                    <div class="card-body">


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
