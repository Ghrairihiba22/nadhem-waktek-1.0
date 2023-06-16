@extends('layouts.app')
@section('content')
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
<a href="{{ route('register') }}" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">Inscription</a>
                <div class="col-lg-16">
                    
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Connexion</h3>
                        @if (session('warning'))
                            <div class="alert alert-danger">
                                {{ session('warning') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label> Adresse email *</label>
                                <span class="focus-border"></span>

                            </div>
                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label>Mot de passe *</label>
                                <span class="focus-border"></span>
                            </div>

                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="rbt-checkbox">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se souvenir de moi') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rbt-lost-password text-end">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    {{ __('Connexion') }}
                                    <span class="icon-reverse-wrapper">

                                        <a href="{{ url('redirect/google') }}">Connexion avec Google</a>

                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
