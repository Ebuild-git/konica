{{-- 
 <div class="whistlist-section mt-110 mb-110">
    <div class="container">
    
        <div class="row">
            <div class="col-12">
                <div class="whistlist-table">
                    <table class="eg-table2">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Produit</th>
                                <th>Date ajout</th>
                                <th>Prix</th>
                                <th>statut</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($favoris as $key => $favo)
                            <tr>
                                <td>
                                    <div class="delete-icon">
                                    
                                        <button class=" remove-from-cart" wire:click="delete({{  $favo->id }})">
                                   
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15"   style="background-color: #b2e21522; fill:#f80a0a;"
                                               height="15" fill="currentColor">
                                               <path
                                                   d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM13.4142 11L15.8891 8.52513L14.4749 7.11091L12 9.58579L9.52513 7.11091L8.11091 8.52513L10.5858 11L8.11091 13.4749L9.52513 14.8891L12 12.4142L14.4749 14.8891L15.8891 13.4749L13.4142 11Z">
                                               </path>
                                           </svg> 
                                              </button>
                                    </div>
                                </td>
                                <td data-label="Product" class="table-product">
                                    <div class="product-img">
                                        <img src="{{ Storage::url($favo->produit->photo) }}" alt="">
                                    </div>
                                    <div class="product-content">
                                        <h6> <a 
                                            href="{{ route('details-produits', ['id' => $favo->produit->id, 'slug'=>Str::slug(Str::limit($favo->produit->nom, 10))]) , }}"> {{
                                            $favo->produit->nom }}</a></h6>
                                    </div>
                                </td>
                                <td data-label="Date Ajout">
                                    <p class="date">{{ $favo->created_at->format('d-m-Y') }}</p>
                                </td>
                                
                                <td data-label="Price">
                                    <p class="price">
                                        {{ $favo->produit->getPrice() }} DT
                                    </p>
                                </td>
                                <td data-label="Stock">
                                    @if ($favo->produit->stock > 0)
                                                <label class="badge bg-success"> Disponible</label>
                                            @else
                                                <label class="badge bg-danger"> Indisponible</label>
                                            @endif
                                </td>
                                <td>

                                 
                                    <a   onclick="AddToCart( {{ $favo->produit->id }} )"class="add-cart-btn hover-btn2"><i class="bi bi-bag-check"></i>Ajouter au panier</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6 ">
                                    <div class="text-center p-5"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" width="120" height="120" fill="currentColor">
                                            <path
                                                d="M12.001 4.52853C14.35 2.42 17.98 2.49 20.2426 4.75736C22.5053 7.02472 22.583 10.637 20.4786 12.993L11.9999 21.485L3.52138 12.993C1.41705 10.637 1.49571 7.01901 3.75736 4.75736C6.02157 2.49315 9.64519 2.41687 12.001 4.52853ZM18.827 6.1701C17.3279 4.66794 14.9076 4.60701 13.337 6.01687L12.0019 7.21524L10.6661 6.01781C9.09098 4.60597 6.67506 4.66808 5.17157 6.17157C3.68183 7.66131 3.60704 10.0473 4.97993 11.6232L11.9999 18.6543L19.0201 11.6232C20.3935 10.0467 20.319 7.66525 18.827 6.1701Z">
                                            </path>
                                        </svg> <br>
                                        <h5>
                                            Vous n'avez de favoris pas pour l'instant.
                                        </h5>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="table-responsive">
    <table class="table axil-product-table axil-wishlist-table">
        <thead>
            <tr>
                <th scope="col" width="5%" class="product-remove"></th>
                <th scope="col" width="20%" class="product-thumbnail">Produit</th>
              {{--   <th scope="col" class="product-title"></th> --}}
                <th scope="col" class="product-title"> Date ajout</th>
           
                <th scope="col" width="5%" class="product-price">Prix uitaire</th>
                <th scope="col" class="product-stock-status"> Statut</th>
                <th scope="col" width="30%" class="product-add-cart"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($favoris as $key => $favo)
            <tr>
                <td>
                    <div class="product-remove">
                    
                        <a class="remove-wishlist" wire:click="delete({{  $favo->id }})">
                            <i class="fal fa-times"></i>
                        </a>
                    </div>
                </td>
                {{-- <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td> --}}
                <td class="product-thumbnail"><a href="{{ route('details-produits', ['id' => $favo->produit->id, 'slug'=>Str::slug(Str::limit($favo->produit->nom, 10))]) , }}"><img src="{{ Storage::url($favo->produit->photo) }}" alt="Digital Product"></a>
                {{ $favo->produit->nom }}
                </td>
                {{-- <td class="product-title"><a href="{{ route('details-produits', ['id' => $favo->produit->id, 'slug'=>Str::slug(Str::limit($favo->produit->nom, 10))]) , }}">{{
                                            $favo->produit->nom }}</a></td> --}}
                <td>  <p class="date">{{ $favo->created_at->format('d-m-Y') }}</p></td>
                <td class="product-price" data-title="Price"><span class="currency-symbol"></span>  {{ $favo->produit->getPrice() }} DT</td>
                <td class="product-stock-status" data-title="Status">   @if ($favo->produit->stock > 0)
                   
                    <label class="badge btn-bg-primary2"> Stock disponible</label>
                @else
                    <label class="badge bg-danger"> Indisponible</label>
                @endif</td>
                <td class="product-add-cart">
                    <a  onclick="AddToCart( {{ $favo->produit->id }} )" class="axil-btn btn-bg-primary2">Panier</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="6 ">
                    <div class="text-center p-5"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" width="120" height="120" fill="currentColor">
                            <path
                                d="M12.001 4.52853C14.35 2.42 17.98 2.49 20.2426 4.75736C22.5053 7.02472 22.583 10.637 20.4786 12.993L11.9999 21.485L3.52138 12.993C1.41705 10.637 1.49571 7.01901 3.75736 4.75736C6.02157 2.49315 9.64519 2.41687 12.001 4.52853ZM18.827 6.1701C17.3279 4.66794 14.9076 4.60701 13.337 6.01687L12.0019 7.21524L10.6661 6.01781C9.09098 4.60597 6.67506 4.66808 5.17157 6.17157C3.68183 7.66131 3.60704 10.0473 4.97993 11.6232L11.9999 18.6543L19.0201 11.6232C20.3935 10.0467 20.319 7.66525 18.827 6.1701Z">
                            </path>
                        </svg> <br>
                        <h5>
                            Vous n'avez de favoris pas pour l'instant.
                        </h5>
                    </div>
                </td>
            </tr>
            @endforelse

        
        </tbody>
    </table>

    <style>
        .btn-bg-primary2 {
            background-color: #5EA13C;
           /*  color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none; */
        }

        .btn-bg-secondary2 {
        background-color: #EFB121; /* Couleur de fond, bleu dans cet exemple */
        color: #ffffff; /* Couleur du texte, blanc dans cet exemple */
        border: none;
        padding: 10px 20px; /* Optionnel, ajuste la taille */
        border-radius: 5px; /* Optionnel, arrondit les coins */
        text-decoration: none; /* Supprime le soulignement */
    }
    </style>
</div>