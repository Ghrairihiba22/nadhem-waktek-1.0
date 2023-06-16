@extends('layouts.app')

@section('content')

    <body class="antialiased">
        <div
            class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">



            <div class="rbt-elements-area bg-color-white rbt-section-gap">
                <div class="container">
                    <div class="row gy-5 row--30">
                        <a href="{{ route('login') }}"
                            class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">Connexion</a>
                        <div class="col-lg-6">
                            <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                                <div class="inner pl--50 pl_sm--0 pl_md--0">
                                    <div class="section-title text-start">
                                        <span class="subtitle bg-pink-opacity">A propos de nous:</span>
                                        <h2 class="title">Planifier votre réunion avec <br />"Nadhem Waktek"</h2>
                                        <p class="description has-medium-font-size mt--20 mb--0">'Nadhem Waktek' est une
                                            application web qui facilite la planication des réunions , les utilisateurs
                                            peuvent envoyer un lien qui se connecte aux calendriers de chacun à tt moment.
                                        </p>
                                    </div>

                                    <div class="rbt-feature-wrapper mt--30">

                                        <div class="rbt-feature feature-style-1 align-items-center">
                                            <div class="icon bg-primary-opacity">
                                                <i class="feather-heart"></i>
                                            </div>
                                            <div class="feature-content">
                                                <h6 class="feature-title">Organiser votre vie simplement .</h6>
                                            </div>
                                        </div>

                                        <div class="rbt-feature feature-style-1 align-items-center">
                                            <div class="icon bg-secondary-opacity">
                                                <i class="feather-book"></i>
                                            </div>
                                            <div class="feature-content">
                                                <h6 class="feature-title">Vous font gagner du temps .</h6>
                                            </div>
                                        </div>

                                        <div class="rbt-feature feature-style-1 align-items-center">
                                            <div class="icon bg-pink-opacity">
                                                <i class="feather-aperture"></i>
                                            </div>
                                            <div class="feature-content">
                                                <h6 class="feature-title">Gérez facilement votre emploi du temps.</h6>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                                <h3 class="title">Inscription</h3>
                                <form method="POST" class="max-width-auto" action="{{ route('register') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <span class="focus-border"></span>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <span class="focus-border"></span>
                                        <input id="email" placeholder="Adresse email *" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <span class="focus-border"></span>
                                        <input id="phone_number" placeholder="Numéro de téléphone *" type="tel"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            name="phone_number" value="{{ old('phone_number') }}" required
                                            autocomplete="tel">

                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>




                                    <div class="form-group">
                                        <span class="focus-border"></span>
                                        <input id="password" placeholder="Mot de passe *" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <span class="focus-border"></span>
                                        <input id="password-confirm" placeholder="Confirmer votre mot de passe *"
                                            type="password" class="form-control" name="password_confirmation" required
                                            autocomplete="new-password">

                                    </div>

                                    <div class="form-group">

                                        <span class="focus-border"></span>
                                        <input id="image" type="file" placeholder="Choisir votre photo de profile * "
                                            class="form-control @error('image') is-invalid @enderror" name="image"
                                            value="{{ old('image') }}" required accept="image/*">

                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-submit-group">

                                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100"
                                            {{ __('Register') }}>
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">S'inscrire</span>
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
