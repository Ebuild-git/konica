@extends('front.fixe')
@section('titre', 'Mes Favoris')
@section('body')

<main>
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Boutique</li>
                  <li class="breadcrumb-item active" aria-current="page">Mes favoris</li>
                </ol>
              </nav>
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="page-content">
            <section class="cart-area pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            @livewire('Front.Favoris')
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


</main>
@endsection
