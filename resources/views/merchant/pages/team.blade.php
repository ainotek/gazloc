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
                @foreach($employees as $employee)
                    <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <span class="avatar avatar-lg">
                                    <img src="{{$employee->picture ?? asset('img/user.png')}}" alt="..." class="avatar-img rounded-circle">
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
                                    <span class="{{
                                    (strtolower($employee->status) === 'expire') ? ' text-danger ' :
                                    (strtolower($employee->status) === 'deactivated') ? ' text-warning ' :
                                     'text-success' }}">
                                        ●
                                    </span>
                                    {{strtolower($employee->status)}}
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-outline-warning d-none d-md-inline-block">
                                    <i class="fe fe-lock"></i>
                                </a>

                                <a href="#!" class="btn btn-sm btn-outline-danger d-none d-md-inline-block"
                                   data-toggle="modal" data-target="#modalDeleteMembers">
                                    <i class="fe fe-trash-2"></i>
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .card-body -->
                </div>
                @endforeach
                <div>
                    {{$employees->render()}}
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
                                    Total Membres
                                </h5>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    {{count($employees)}}
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
                                    {{ \Carbon\Carbon::parse($store->expire_at)->format('d/m/Y') ?? ''}}
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
                                    Magazin
                                </h5>

                            </div>
                            <div class="col-auto">

                                <span class="small">
                                    {{$store->name}}
                                </span>

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
                        <form action="{{route('merchant.staff.add')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Nom prénom">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name')  }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('email')  }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <input name="phone" type="tel" class="form-control" id="phone" placeholder="05000000">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('phone')  }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('password')  }}</strong>
                                    </span>
                                @enderror
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

    <!-- Modal: Supress -->
    <div class="modal fade" id="modalDeleteMembers" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-card card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
                    <div class="card-header bg-secondary text-light text-center">
                        <div class="row align-items-center ">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title" id="exampleModalCenterTitle">
                                    Etes vous sur?
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Close -->
                                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-header text-center">
                        <!-- Form -->
                        <form action="{{route('merchant.staff.add')}}" method="post">
                            @csrf
                            <button type="reset" class="btn btn-secondary mx-3" data-dismiss="modal" aria-label="Close">Non</button>
                            <button type="submit" class="btn btn-danger mx-3">Oui</button>
                        </form>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
