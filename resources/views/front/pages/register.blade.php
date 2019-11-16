@extends('front.alternative')
@section('title')
    <title>Enregistrement</title>
@stop
@section('content')

        <div class="col-12 col-md-5 col-xl-4">
            <!-- Heading -->
            <h1 class="display-4 text-center mb-2">
                Enregistrement
            </h1>
            <!-- Subheading -->
            <p class="text-muted text-center mb-4">
                Créé votre compte de marchand.
            </p>
            <!-- Form -->
            <form action="{{route('MerchantCreate')}}" method="post">
                @csrf
                <!--  Name  -->
                <div class="form-group">
                    <!-- Label -->
                    <label for="name">
                        Nom du magasin
                    </label>
                    <!-- Input -->
                    <input type="text" class="form-control" placeholder="magasin" name="name" id="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name')  }}</strong>
                        </span>
                    @enderror
                </div>

                <!--  City  -->
                <div class="form-group">
                    <!-- Label -->
                    <label for="city">
                        Ville
                    </label>
                    <!-- Input -->
                    <input type="text" class="form-control" placeholder="Abidjan" name="city" id="city">
                    @error('city')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('city')  }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Register Number
                <div class="form-group">
                    <label for="registration">
                        Numéro d'identification vendeur
                    </label>

                    <input type="text" class="form-control" placeholder="00232" name="registration" id="registration">
                    @error('registration')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('registration')  }}</strong>
                        </span>
                    @enderror
                </div>
                    -->


                    <!-- Email address -->
                <div class="form-group">
                    <!-- Label -->
                    <label for="email">
                        Addresse Email
                    </label>
                    <!-- Input -->
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email')  }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <!-- Label -->
                    <label for="password">
                        Mot de passe
                    </label>
                    <!-- Input group -->
                    <div class="input-group input-group-merge">
                        <!-- Input -->
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               required autocomplete="new-password">
                        <!-- Icon -->
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password')  }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="password-confirm"
                               class="">Confirmer votre mot de passe
                        </label>

                        <div class="input-group input-group-merge">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation')  }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                    S'enregistrer
                </button>

                <!-- Link -->
                <div class="text-center">
                    <small class="text-muted text-center">
                        Vous avez déja un compte? <a href="{{route('login')}}">Connectez vous!</a>.
                    </small>
                </div>
                <div class="text-center">
                    <small class="text-muted text-center">
                        <a href="{{route('home')}}"> <i class="fe fe-home"></i> Retournez à l'accueil</a>
                    </small>
                </div>
            </form>

        </div>

@endsection
