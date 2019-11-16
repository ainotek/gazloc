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
                    </div> <!-- / .row -->

                    <div class="row align-items-center">
                        <div class="col">

                            <!-- Nav -->
                            <ul class="nav nav-tabs nav-overflow header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        Liste
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
                @foreach($suppliers as $supplier)
                    <div class="col-12 col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Avatar -->
                            <div class="text-center">
                                <span class="card-avatar avatar avatar-lg mx-auto">
                                    <img src="{{$supplier->logo}}" alt="" class="avatar-img rounded">
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title text-center mb-3">
                                <span>{{$supplier->name}}</span>
                            </h2>

                            <!-- Text -->

                            <p class="card-text text-center text-muted">
                                <i class="fe fe-phone text-pink "></i> : {{$supplier->phone}}
                            </p>
                            <p class="card-text text-center text-muted">
                                <i class="fe fe-send"></i> : {{$supplier->email}}
                            </p>

                            <!-- Divider -->
                            <hr>

                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <i class="fe fe-clipboard"></i> Produits
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Avatar group -->
                                    <div class="avatar-group">
                                        @foreach($storeProducts as $storeProduct)
                                            <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                            <img src="{{asset('')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                        </a>
                                        @endforeach
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div> <!-- / .card-body -->
                    </div>

                </div>
                @endforeach
            </div> <!-- / .row -->
        </div>
@endsection
