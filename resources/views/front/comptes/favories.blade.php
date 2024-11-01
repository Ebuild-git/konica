@extends('front.fixe')
@section('titre', 'Mes Favoris')
@section('body')

<main>
    <main class="main-wrapper">

        
        <div class="axil-wishlist-area axil-section-gap">
            <div class="container">
                <div class="product-table-heading">
                    <h4 class="title">Liste de mes favoris sur Ben Mahmoud Market</h4>
                </div>
                @livewire('Front.Favoris')
          
            </div>
        </div>
       
    </main>

</main>
@endsection
