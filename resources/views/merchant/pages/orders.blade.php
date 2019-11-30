@extends('merchant.index')
@section('content')
    <div class="container-fluid" style="margin-top: -36px;">
        <div class="row justify-content-center">
            <div class="col-12">

                <!-- Header -->
                <div class="header mt-md-5">
                    <div class="header-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Pretitle -->
                                <h6 class="header-pretitle">
                                    Marchand
                                </h6>

                                <!-- Title -->
                                <h1 class="header-title">
                                    Commandes
                                </h1>

                            </div>
                        </div> <!-- / .row -->
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Nav -->
                                <ul class="nav nav-tabs nav-overflow header-tabs">
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">
                                            Total <span class="badge badge-pill badge-soft-secondary">{{count($orders) ?? 0}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">
                                            Livrer <span class="badge badge-pill badge-soft-secondary">24</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">
                                            En Attente <span class="badge badge-pill badge-soft-secondary">3</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">
                                            Annuler <span class="badge badge-pill badge-soft-secondary">71</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="card" data-toggle="lists" data-options='{"valueNames": ["orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]}'>
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Search -->
                                <form class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <span class="fe fe-search text-muted"></span>
                                    </div>
                                    <div class="col">
                                        <input type="search" class="form-control form-control-flush search" placeholder="Search">
                                    </div>
                                </form>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->

                                <div class="dropdown">
                                    <button class="btn btn-sm btn-white dropdown-toggle" type="button" id="bulkActionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Bulk action
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bulkActionDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox table-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectAll">
                                        <label class="custom-control-label" for="ordersSelectAll">
                                            &nbsp;
                                        </label>
                                    </div>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="orders-order">
                                        Commande n°
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="orders-product">
                                        Produit
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="orders-date">
                                        Date
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="orders-total">
                                        Total
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="orders-status">
                                        Status
                                    </a>
                                </th>
                                <th colspan="2">
                                    <a href="#" class="text-muted sort" data-sort="orders-method">
                                        Payment method
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($orders as $order)
                                <tr>
                                <td>
                                    <div class="custom-control custom-checkbox table-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectOne">
                                        <label class="custom-control-label" for="ordersSelectOne">
                                            &nbsp;
                                        </label>
                                    </div>
                                </td>
                                <td class="orders-order">
                                    {{$order->order_number}}
                                </td>
                                <td class="orders-product">
                                    {{$order->product_name}}
                                </td>
                                <td class="orders-date">
                                    <time datetime="{{$order->created_at}}">{{$order->created_at}}</time>
                                </td>
                                <td class="orders-total">
                                    {{$order->price * $order->quantity}} FCFA
                                </td>
                                <td class="orders-status">
                                    <div class="badge badge-soft-info">
                                        {{$order->order_state}}
                                    </div>
                                </td>
                                <td class="orders-method">
                                    Mastercard
                                </td>
                                <td class="text-right">
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
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <span class="pull-right">
                            {{$orders->render()}}
                        </span>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
