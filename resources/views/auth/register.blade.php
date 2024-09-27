@extends('front.fixe')
@section('titre', 'Création compte')
@section('body')

    <main>
        @php
    $config = DB::table('configs')->first();
    $service = DB::table('services')->get();
    $produit = DB::table('produits')->get();
@endphp

        <div class="tp-login-area pt-150 pb-150 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-6 col-lg-6">
                        <div class="tp-login-left">
                            <style>
                                @media only screen and (max-width: 768px) {


                                    .tp-login-thumbs {
                                        display: none;
                                    }
                                }
                            </style>
                            <div class="tp-login-thumbs">
                                <img src="{{ Storage::url($config->logo) }}" alt="Logo" height="600" width="600" />
                            </div>
                        </div>
                    </div>
                    <div class=" col card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Création compte</h2>
                        @if (session()->has('error'))
                            <div class="alert alert-danger p-3 small">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success p-3 small">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="contact-form">
                            <form method="POST" action="{{ route('register') }}">

                                @csrf
                                <div class="input-validator">
                                    <input type="text" name="nom" placeholder="Votre nom" value="{{ old('nom') }}"
                                        required />
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-validator">
                                    <input type="text" name="prenom" value="{{ old('prenom') }}"
                                        placeholder="Votre prénom" required width="100" />
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-validator">
                                    <input type="text" name="email" value="{{ old('email') }}"
                                        placeholder=" Votre Email" required />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-validator">
                                    <input id="password" required type="password" value="{{ old('password') }}"
                                        placeholder="Votre mot de passe"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" aria-describedby="basic-addon1">


                                    <span class="input-group-text">
                                        <i class="fas fa-eye-slash password-toggle"></i>
                                    </span>


                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <style>
                                        .input-validator {
                                            position: relative;
                                        }

                                        .input-group-text {
                                            cursor: pointer;
                                            position: absolute;
                                            right: 10px;
                                            top: 10px;
                                        }
                                    </style>


                                </div>
                                <div class="input-validator">
                                    <input id="password-confirm" required placeholder="Confirmer le mot de passe"
                                        type="password" class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>


                                {{-- </div><a class="btn -dark" href="#">Enregistrer</a> --}}
                                <div class="text-center">

                                    <button {{-- class="tp-btn-theme w-100" --}} class="btn -dark"
                                        type="submit"><span>Enregistrer</span></button>

                                </div>
                            </form>

                            <script>
                                const passwordField = document.getElementById('password');
                                const toggleButton = document.querySelector('.password-toggle');

                                toggleButton.addEventListener('click', function() {
                                    if (passwordField.type === 'password') {
                                        passwordField.type = 'text';
                                        this.classList.remove('fa-eye-slash');
                                        this.classList.add('fa-eye');
                                    } else {
                                        passwordField.type = 'password';
                                        this.classList.remove('fa-eye');
                                        this.classList.add('fa-eye-slash');
                                    }
                                });
                            </script>
                        </div>

                    </div>
                </div>
                {{-- </div> --}}
                {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>

    </main>
@endsection
