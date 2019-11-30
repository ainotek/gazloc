@extends('merchant.index')
@section('content')
    <!-- HEADER -->
    <div class="header">

        <!-- Image -->

        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body mt-n3 mt-md-n4">
                <div class="row align-items-end">
                    <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-xxl header-avatar-top">
                            <img src="{{$supplier->logo}}" alt="..." class="avatar-img rounded-circle border border-4 border-body">
                        </div>

                    </div>
                    <div class="col mb-3 ml-n3 ml-md-n2">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle">
                            Fournisseur
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title">
                            {{$supplier->name}}
                        </h1>

                    </div>
                    <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3">

                        <!-- Button -->
                        <a href="mailto:{{$supplier->email}}"
                           class="btn btn-secondary d-block d-md-inline-block lift"
                           data-toggle="tooltip" data-placement="top" data-original-title="{{$supplier->email}}" >
                            <i class="fe fe-send"></i>
                        </a>
                        <a href="tel:{{$supplier->phone}}"
                           class="btn btn-secondary d-block d-md-inline-block lift"
                           data-toggle="tooltip" data-placement="top" data-original-title="{{$supplier->phone}}" >
                            <i class="fe fe-phone-call"></i>
                        </a>
                    </div>
                </div> <!-- / .row -->
                <div class="row align-items-center">
                    <div class="col">

                        <!-- Nav -->
                        <ul class="nav nav-tabs nav-overflow header-tabs">
                            <li class="nav-item">
                                <a href="{{route('merchant.suppliers')}}" class="nav-link">
                                    Stock
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Produits
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
            <div class="col-12">

                <!-- Files -->
                <div class="card" data-toggle="lists" data-options="{&quot;valueNames&quot;: [&quot;name&quot;]}">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Files
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">

                                    <!-- Toggle -->
                                    <a href="#" class="small text-muted dropdown-toggle" data-toggle="dropdown">
                                        Sort order
                                    </a>

                                    <!-- Menu -->
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item sort" data-sort="name" href="#!">
                                            Asc
                                        </a>
                                        <a class="dropdown-item sort" data-sort="name" href="#!">
                                            Desc
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-primary">
                                    Upload
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12">

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
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">

                        <!-- List -->
                        <ul class="list-group list-group-lg list-group-flush list my-n4">
                            @foreach($products as $product)
                                <li class="list-group-item px-0">

                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="#!" class="avatar avatar-lg">
                                            <img src="{{asset('')}}/img/files/file-3.jpg" alt="..." class="avatar-img rounded">
                                        </a>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Title -->
                                        <h4 class="card-title mb-1 name">
                                            <a href="#!">{{$product->name}}</a>
                                        </h4>

                                        <!-- Text -->
                                        <p class="card-text small text-muted mb-1">
                                            750kb JPG
                                        </p>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            Uploaded by Dianna Smiley on <time datetime="2018-01-03">Jan 3, 2018</time>
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Button -->
                                        <a href="#!" class="btn btn-sm btn-white d-none d-md-inline-block">
                                            Download
                                        </a>

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

                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
