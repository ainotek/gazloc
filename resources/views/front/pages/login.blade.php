@extends('front.alternative')
@section('title')
    <title>Connexion</title>
@stop
@section('content')
            <div class="col-12 col-md-5 col-xl-4">

                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    Connexion
                </h1>

                <!-- Subheading -->
                <p class="text-muted text-center mb-5">
                    Accedez à votre panel d'administration.
                </p>

                <!-- Form -->
                <form method="POST" action="{{ route('authentication') }}">
                    @csrf
                    <!-- Email address -->
                    <div class="form-group">
                        <!-- Label -->
                        <label for="email">Addresse Email</label>
                        <!-- Input -->
                        <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="nom@exemple.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <!-- Label -->
                                <label for="password">Mot de passe</label>
                            </div>
                            <div class="col-auto">
                                <!-- Help text -->
                                @if (Route::has('password.request'))
                                    <a class="form-text small text-muted" href="{{ route('password.request') }}">
                                        Mot de passe oublier?
                                    </a>
                                @endif
                            </div>
                        </div> <!-- / .row -->

                        <!-- Input group -->
                        <div class="input-group input-group-merge">
                            <!-- Input -->
                            <input id="password" type="password" class="form-control
                                    @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="current-password"
                                   placeholder="Entrez votre mot de passe">
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="input-group input-group-merge ml-4 mt-3">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="text-muted text-center ml-2" for="remember">
                                Rester connecter.
                            </label>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                        Connexion
                    </button>

                    <!-- Link -->
                    <div class="text-center">
                        <small class="text-muted text-center">
                            Pas encore de compte? <a href="{{route('register')}}">Enregistrez vous</a>.
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
