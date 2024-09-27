@extends('front.fixe')
@section('titre', 'Paiement')
@section('body')
<main>


<!-- Start Breadcrumb Section -->
<div class="breadcrumb-section">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Boutique</li>
                <li class="breadcrumb-item active" aria-current="page">Commande</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb Section section -->

<!-- ========== Checkout Section Start============= -->
<div class="checkout-section pt-110 mb-110">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-7">
                <div class="form-wrap mb-30">
                    <h4>Détails facture</h4>
                   
                <form action="{{ route('order.confirm') }}" method="post">
                    @if ($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-inner">
                                    <label>Votre nom</label>
                                    <input type="text" name="nom"    @if (Auth::user()) value="{{ Auth::user()->nom }}" @endif required/>
                                                              
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-inner">
                                    <label>Votre prénom</label>
                                    <input type="text" name="prenom"    @if (Auth::user()) value="{{ Auth::user()->prenom }}" @endif required/>
                                                              
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-inner">
                                    <label>Votre Email</label>
                                    <input type="text" name="email"     @if (Auth::user()) value="{{ Auth::user()->email }}" @endif required/>
                                                            
                                                              
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-inner">
                                    <label>Votre téléphone</label>
                                    <input type="number" name="phone"   required/>
                                                              
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-inner">
                                    <label>Votre addresse</label>
                                    <input type="text" name="adresse" required />                         
                                </div>
                            </div>
                         
                            <div class="col-12">
                                <div class="form-inner">
                                    <select  name="gouvernorat" >
                                        <option value="">Gouvernorat</option>
                                        @foreach ($gouvernorats as $gouvernorat)
                                        <option value="{{ $gouvernorat }}">
                                            {{ $gouvernorat }}
                                        </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-12">
                                <label>Message(Optionnel)</label>
                                <div class="form-inner">
                                    <textarea name="message" placeholder="Note sur votre commande (Optionnel)" rows="3"></textarea>
                                </div>
                            </div>
                          
                        </div>
                   {{--  </form> --}}
                </div>
              
            </div>
            <div class="col-lg-5">
                <div class="added-product-summary mb-30">
                    <h5>Résummé de la commande</h5>
                    <ul class="added-products">
                        @foreach ($paniers as $id => $details)
                        <li class="single-product">
                            <div class="product-area">
                                <div class="product-img">
                                    <img src="{{ Storage::url($details['photo']) }}"  alt="">
                                </div>
                                <div class="product-info">
                                    <h5><a href="#">{{ $details['nom'] }}</a></h5>
                                    <div class="product-total">
                                       {{--  <div class="quantity-counter">
                                            <a href="#" class="quantity__minus"><i class='bx bx-minus'></i></a>
                                            <input name="quantity" type="text" class="quantity__input" value="01">
                                            <a href="#" class="quantity__plus"><i class='bx bx-plus'></i></a>
                                        </div> --}}
                                       QTé: {{ $details['quantite'] }} 
                                        <strong> <i class="bi bi-x-lg px-2"></i>
                                            <span class="product-price">{{ $details['prix'] }} DT</span>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                {{-- <i class='bx bx-x'></i> --}}
                                {{ $details['total'] }} DT
                            </div>
                        </li>
                        @endforeach
                     
                    </ul>
                </div>
                <div class="cost-summary mb-30">
                    <table class="table cost-summary-table">
                        <thead>
                            <tr>
                                <th>Subtotal</th>
                                <th>{{ $total }} DT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tax">Frais de livraison</td>
                                <td>{{ $configs->frais ?? 0 }}
                                    DT</td>
                            </tr>
                            <tr>
                                <td class="tax">Coupon de réduction</td>
                                <td>-{{ session('coupon')['value'] ?? 0 }}
                                    DT</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
                <div class="cost-summary total-cost mb-30">
                    <table class="table cost-summary-table total-cost">
                        <thead>
                            <tr>
                                <th>Total</th>
                                <th>{{ $total + $configs->frais ?? 0 }} DT</th>
                            </tr>
                        </thead>
                    </table>
                </div>
               {{--  <form class="payment-form"> --}}
                   
                    <div class="place-order-btn">
                        
                        <button type="submit" class="primary-btn1 hover-btn3">Confirmation
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</main>

@endsection