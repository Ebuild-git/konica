@php

$configs = DB::table('configs')->first();
@endphp
<!-- Star Whistlist section -->
<div class="whistlist-section cart mt-110 mb-110">
    <div class="container">
        <div class="row mb-50">
            <div class="col-12">
                <div class="whistlist-table">
                    <table class="eg-table2">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($paniers ?? [] as $id => $details)
                            <tr data-id="{{ $id }}">
                                <td>
                                    <div class="delete-icon">
                                        <button class=" remove-from-cart  .btn-danger" wire:click="delete({{ $details['id_produit'] }})">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" style=" fill:#f80a0a;" height="15" fill="currentColor">
                                                <path d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM13.4142 11L15.8891 8.52513L14.4749 7.11091L12 9.58579L9.52513 7.11091L8.11091 8.52513L10.5858 11L8.11091 13.4749L9.52513 14.8891L12 12.4142L14.4749 14.8891L15.8891 13.4749L13.4142 11Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td data-label="Product" class="table-product">
                                    <div class="product-img">
                                        <a href="{{ route('details-produits', ['id' => $details['id_produit'], 'slug'=>Str::slug(Str::limit($details['nom'], 10))]) , }}">
                                            <img src="{{ Storage::url($details['photo']) }}" height="40" width="40" alt="Image du  produit">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="#"> {{ $details['nom'] }}</a></h6>
                                    </div>
                                </td>
                                <td data-label="Price">
                                    <p class="price">
                                        {{ $details['prix'] }} DT
                                    </p>
                                </td>
                                <td data-label="Quantity">
                                    <div class="quantity-counter">
                                        <a wire:click="update({{ $details['id_produit'] }}, {{ max(0, $details['quantite'] - 1) }})" class="quantity__minus"><i class='bx bx-minus'></i></a>
                                        <input type="number" value="{{ $details['quantite'] }}" min="0" wire:change="update({{ $details['id_produit'] }}, $event.target.value)" class="quantity__input">


                                        <a wire:click="update({{ $details['id_produit'] }}, {{ $details['quantite'] + 1 }})" class="quantity__plus"><i class='bx bx-plus'></i></a>
                                    </div>
                                </td>
                                <td data-label="Total">
                                    {{ $details['prix'] * $details['quantite'] }}
                                    DT
                                </td>
                                @empty
                            <tr>
                                <td colspan="6">
                                    <div class="text-center p-5">
                                        <img width="64" height="64" src="https://img.icons8.com/pastel-glyph/64/578b07/shopping-cart--v2.png" alt="shopping-cart--v2" /><br>

                                        <h6>
                                            Vous n'avez pas de produits au panier.
                                        </h6>
                                        <br>

                                    </div>
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row g-4">

            <div class="col-lg-4">
                <div class="coupon-area">
                    @if ($total > 0)
                    <div class="cart-coupon-input">
                        <h5>Code promo</h5>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form action="{{ route('apply.coupon') }}" method="POST">
                            <div class="form-inner">
                                @csrf
                                <input type="text" name="code" placeholder="Entrez le code du coupon">
                                <button type="submit" class="primary-btn1 hover-btn3">Appliquer</button>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-8">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Total panier</th>
                            <th></th>
                            <th>{{ $total }} DT</th>
                        </tr>
                    </thead>
                    @if ($total > 0)
                    <tbody>
                        <tr>
                            <td>Frais de livraison</td>
                            <td>
                                <ul class="cost-list text-start">
                                   {{--  <li>Frais de livraison</li> --}}


                                </ul>
                            </td>
                            <td>
                                <ul class="single-cost text-center">
                                    <li>{{ $configs->frais ?? 0 }}
                                        DT</li>

                                    <li></li>

                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td>{{ $total + $configs->frais ?? 0 }} DT</td>
                        </tr>
                    </tbody>
                    @endif
                </table>
                @if ($total > 0)
                <a class="primary-btn1 hover-btn3" href="{{ url('/commander') }}">Commander</a>
                @endif
                {{-- <button type="submit" class="primary-btn1 hover-btn3">Product Checkout</button> --}}
            </div>
        </div>
    </div>
</div>
