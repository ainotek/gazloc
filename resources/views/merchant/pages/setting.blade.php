@extends('merchant.index')
@section('content')
     <div class="container">

                <!-- Header -->
                <div class="header">
                    <div class="header-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Pretitle -->
                                <h6 class="header-pretitle">
                                    Marchand
                                </h6>

                                <!-- Title -->
                                <h1 class="header-title">
                                    Paramètres
                                </h1>

                            </div>
                        </div> <!-- / .row -->
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Nav -->
                                <ul class="nav nav-tabs nav-overflow header-tabs">
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link active">
                                            General
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">
                                            Billing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">
                                            Notifications
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <form class="mb-4">

                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- First name -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    First name
                                </label>

                                <!-- Input -->
                                <input type="text" class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Last name -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Last name
                                </label>

                                <!-- Input -->
                                <input type="text" class="form-control">

                            </div>

                        </div>
                        <div class="col-12">

                            <!-- Email address -->
                            <div class="form-group">

                                <!-- Label -->
                                <label class="mb-1">
                                    Email address
                                </label>

                                <!-- Form text -->
                                <small class="form-text text-muted">
                                    This contact will be shown to others publicly, so choose it carefully.
                                </small>

                                <!-- Input -->
                                <input type="email" class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Phone -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Phone
                                </label>

                                <!-- Input -->
                                <input type="text" class="form-control mb-3" placeholder="(___)___-____" data-mask="(000) 000-0000" autocomplete="off" maxlength="14">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Birthday -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Birthday
                                </label>

                                <!-- Input -->
                                <input type="text" class="form-control flatpickr-input" data-toggle="flatpickr" readonly="readonly">

                            </div>

                        </div>
                    </div> <!-- / .row -->

                    <!-- Divider -->
                    <hr class="mt-4 mb-5">

                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- Public profile -->
                            <div class="form-group">

                                <!-- Label -->
                                <label class="mb-1">
                                    Public profile
                                </label>

                                <!-- Form text -->
                                <small class="form-text text-muted">
                                    Making your profile public means that anyone on the Dashkit network will be able to find you.
                                </small>

                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Switch -->
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="switchOne">
                                            <label class="custom-control-label" for="switchOne"></label>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Help text -->
                                        <small class="text-muted">
                                            You're currently invisible
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Allow for additional Bookings -->
                            <div class="form-group">

                                <!-- Label -->
                                <label class="mb-1">
                                    Allow for additional Bookings
                                </label>

                                <!-- Form text -->
                                <small class="form-text text-muted">
                                    If you are available for hire outside of the current situation, you can encourage others to hire you.
                                </small>

                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Switch -->
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="switchTwo">
                                            <label class="custom-control-label" for="switchTwo"></label>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Help text -->
                                        <small class="text-muted">
                                            You're currently available
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>

                        </div>
                    </div> <!-- / .row -->

                    <!-- Divider -->
                    <hr class="mt-4 mb-5">
                    <h2 class="text-decoration-underline text-center mb-4">Changer de mot de passe</h2>

                    <div class="row">
                        <div class="col-12 col-md-6 order-md-2">

                            <!-- Card -->
                            <div class="card bg-light border ml-md-4">
                                <div class="card-body">

                                    <p class="mb-2">
                                        Prérequis mot de passe
                                    </p>

                                    <p class="small text-muted mb-2">
                                        Le mot de passe doit respecter les critères suivant:
                                    </p>

                                    <ul class="small text-muted pl-4 mb-0">
                                        <li>
                                            Minimum 8 caractères
                                        </li>
                                        <li>
                                            Au moins un caractère numérique
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Password -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Ancien mot de passe
                                </label>

                                <!-- Input -->
                                <input type="password" class="form-control" name="password[old]">

                            </div>

                            <!-- New password -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Nouveau mot de passe
                                </label>

                                <!-- Input -->
                                <input type="password" class="form-control" name="password[new]">

                            </div>

                            <!-- Confirm new password -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Confirmer le mot de passe
                                </label>

                                <!-- Input -->
                                <input type="password" class="form-control" name="password[new_confirm]">

                            </div>

                            <!-- Submit -->
                            <button type="submit" class="btn btn-primary lift">
                                Sauvegarder
                            </button>

                        </div>
                    </div> <!-- / .row -->

                </form>

            </div>

@endsection
