@extends('front.fixe')
@section('titre', 'Mon panier')
@section('body')
    <main>
        <div class="breadcrumb-section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Boutique</li>
                      <li class="breadcrumb-item active" aria-current="page">Mon panier</li>
                    </ol>
                  </nav>
            </div>
        </div>
        <!-- Cart area start-->
        <section class="cart-area pt-150 pb-150">

            <div class="container">
                <div class="row ">
                    <div class="col-12 cart">

                        @livewire('Front.Panier')

                    </div>
                </div>
        </section>
    </main>
@endsection
