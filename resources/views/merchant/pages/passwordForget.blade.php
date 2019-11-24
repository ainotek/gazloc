@extends('front.alternative')
@section('title')
    <title>Mot de passe oublié</title>
@stop
@section('content')
        <div class="col-12 col-md-5 col-xl-4 my-5">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                Password reset
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                Enter your email to get a password reset link.
            </p>

            <!-- Form -->
            <form>

                <!-- Email address -->
                <div class="form-group">

                    <!-- Label -->
                    <label>Email Address</label>

                    <!-- Input -->
                    <input type="email" class="form-control" placeholder="name@address.com">

                </div>

                <!-- Submit -->
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    Reset Password
                </button>

                <!-- Link -->
                <div class="text-center">
                    <small class="text-muted text-center">
                        Remember your password? <a href="sign-in.html">Log in</a>.
                    </small>
                </div>

            </form>

        </div>
@endsection
