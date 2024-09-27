@extends('front.fixe')
@section('titre', 'Connexion')
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
                    <div class="col d-flex justify-content-center align-items-center h-100">




                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Se connecter</h2>


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
                                <form method="POST" action="{{ route('login') }}">

                                    @csrf
                                    <div class="input-validator">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="email" class="form-control"
                                            value="{{ old('email') }}"id="user_login_email" name="email"
                                            placeholder="Email" />


                                    </div>

                                    <div class="input-validator">
                                        <input type="password" class="form-control" placeholder="Password" name="password"
                                            value="" id="password" />
                                        <span class="input-group-text" id="togglePassword">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
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


                                    <div class="row">

                                        <div class=" col text-center">



                                            <button class="btn -dark"type="submit"><span>Connexion</span></button>
                                        </div>



                                        <div class="text-center p-2">
                                            <a class="forget" href="{{ route('forgot-password') }}">Mot de passe
                                                oublié</a>
                                        </div>

                                    </div>

                                    <br>
                                    <br><br>

                                    <div class=" col tp-login-forgot text-center">
                                        <span >
                                            Vous n'avez pas de compte ?
                                        </span>
                                        <a href="{{ url('register') }}">M'inscrire </a>

                                    </div>


                                </form>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const togglePassword = document.getElementById('togglePassword');
                                        const password = document.getElementById('password');
                                        if (togglePassword && password) {
                                            togglePassword.addEventListener('click', function() {
                                                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                                password.setAttribute('type', type);
                                                this.firstElementChild.classList.toggle('fa-eye-slash');
                                            });
                                        } else {
                                            console.error("Element with id 'togglePassword' or 'password' not found!");
                                        }
                                    });
                                </script>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
