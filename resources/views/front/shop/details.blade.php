@extends('front.fixe')
@section('titre', $produit->nom)
@section('body')
    @php

        $config = DB::table('configs')->first();
    @endphp

    <head>
    @section('header')
        <meta name="description" content="{{ $produit->description ?? ' ' }}">
        <meta name="author" content="youthkey.store">
        <meta property="og:title" content="{{ $produit->nom }}">
        <meta property="og:description" content="{{ $produit->description ?? '' }}">
        <meta property="og:image" content="{{ $produit->photo }}">
        <meta property="og:type" content="product">
        <meta property="og:price:amount" content="{{ $produit->prix }} DT">

        <meta property="og:availability" content="{{ $produit->statut }}">

        <meta property="product:price:amount" content="{{ $produit->prix }} DT">

        <meta property="product:availability" content="{{ $produit->statut }}">
        <meta name="robots" content="index, follow">


    @endsection

</head>
<script src="path/to/jquery.js"></script>
<script src="path/to/jquery.elevatezoom.js"></script>


<main>

    <main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
            <div class="single-product-thumb mb--40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="shop-details-img">
                                <div class="tab-content" id="v-pills-tabContent">
        
                                   {{--  <div class="shop-details-tab-img product-img--main" data-scale="1.4" data-image="{{ Storage::url($produit->photo) }}">
                                        <img id="mainImage" src="{{ Storage::url($produit->photo) }}" alt="Product image" />
        
        
        
        
                                    </div> --}}
                                    <div class="shop-details-tab-img product-img--main" id="zoomContainer" data-scale="1.4" style="overflow: hidden; position: relative;">
                                        <!-- Image principale -->
                                        <img id="mainImage" src="{{ Storage::url($produit->photo) }}" height="600" width="600" alt="Product image" style="transition: transform 0.3s ease;" />
                                    </div>
        
        
                                </div>
                                <br><br>
        
                                <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    @foreach (json_decode($produit->photos) ?? [] as $image)
                                    <div class="slider__item">
                                        <img onclick="changeMainImage('{{ Storage::url($image) }}')" src="{{ Storage::url($image) }}" width="100" height="100" style="border-radius: 8px;" alt="Additional product image" />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
        
                            <script>
                                function changeMainImage(imageUrl) {
                                    document.getElementById('mainImage').src = imageUrl;
                                }
        
                            </script>
        
        <script>
            // Zoom on hover
            const zoomContainer = document.getElementById('zoomContainer');
            const mainImage = document.getElementById('mainImage');
            const scale = zoomContainer.getAttribute('data-scale') || 1.4; // Utilise l'attribut data-scale
        
            // Fonction pour zoomer lorsque la souris entre
            zoomContainer.addEventListener('mouseover', function () {
                mainImage.style.transform = `scale(${scale})`; // Applique le zoom selon data-scale
                mainImage.style.cursor = "zoom-in";
            });
        
            // Fonction pour réinitialiser le zoom lorsque la souris sort
            zoomContainer.addEventListener('mouseout', function () {
                mainImage.style.transform = "scale(1)"; // Réinitialise l'échelle
            });
        
            // Fonction pour changer l'image principale
            function changeMainImage(imageUrl) {
                mainImage.src = imageUrl;
                mainImage.style.transform = "scale(1)"; // Réinitialise le zoom lors du changement d'image
            }
        </script>
        
        
        
        
                        </div>

                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <h3 class="product-title">{{ $produit->nom }}</h3>

                                    <span class="price-amount">

                                        @if ($produit->inPromotion())
                                            <div class="row">
                                                <div class="col-sm-6 col-6">

                                                    <b class="text-success" style="color: #4169E1">
                                                        {{ $produit->getPrice() }} DT
                                                    </b>
                                                </div>

                                                <div class="col-sm-6 col-6 text-end">


                                                    <span
                                                        style="position: relative; font-size: 1.2rem; color: #dc3545; font-weight: bold;">
                                                        {{ $produit->prix }} DT
                                                        <span
                                                            style="position: absolute; top: 50%; left: 0; width: 100%; height: 2px; background-color: black;"></span>
                                                    </span>


                                                </div>
                                            @else
                                                {{ $produit->getPrice() }}DT
                                        @endif
                                    </span>
                                    <div class="product-rating">

                                    </div>
                                    <ul class="product-meta">
                                        @if ($produit->stock > 0)
                                            <label class="badge bg-success"> Stock disponible</label>
                                        @else
                                            <label class="badge bg-danger"> Stock non disponible</label>
                                        @endif

                                        <li>Categorie:<span> {{ Str::limit($produit->categories->nom, 30) }}</span>
                                        </li>
                                        <li> <span>Reference:</span> {{ $produit->reference }}</li>
                                    </ul>
                                    <p class="description">{{ Str::limit($produit->description, 100) }}</p>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">

                                        </div>
                                        <!-- End Product Variation  -->

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation product-size-variation">

                                        </div>
                                        <!-- End Product Variation  -->

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                        <!-- Start Quentity Action  -->
                                        <div class="pro-qty">
                                            {{--  <input type="text" value="1"> --}}
                                            <span class="quantity-control minus"></span>
                                            <input type="number" class="input-text qty text" name="quantite"
                                                min="1" value="1" id="qte-{{ $produit->id }}"
                                                autocomplete="off">
                                            <span class="quantity-control plus"></i></span>
                                        </div>



                                        <!-- End Quentity Action  -->

                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a onclick="AddToCart( {{ $produit->id }} )"
                                                    class="axil-btn btn-bg-primary">Ajouter au panier</a></li>
                                            @if (Auth()->user())
                                                <li class="wishlist">

                                                    <a onclick="AddFavoris({{ $produit->id }})"
                                                        class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a>
                                                </li>
                                            @endif
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->

            <div class="woocommerce-tabs wc-tabs-wrapper bg-vista-white">
                <div class="container">
                    <ul class="nav tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="active" id="description-tab" data-bs-toggle="tab" href="#description"
                                role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="product-desc-wrapper">
                                <div class="row">
                                    <div class="col-lg-12 mb--30">
                                        <div class="single-desc">

                                            <p>{!! $produit->description ?? ' ' !!}</p>
                                        </div>
                                    </div>
                                    <!-- End .col-lg-6 -->

                                    <!-- End .col-lg-6 -->
                                </div>
                                <!-- End .row -->

                                <!-- End .row -->
                            </div>
                            <!-- End .product-desc-wrapper -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- woocommerce-tabs -->

        </div>
        <!-- End Shop Area  -->

        <!-- Start Recently Viewed Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Les
                        produits de la même categorie</span>
                    <h2 class="title">Parcourir</h2>
                </div>
                <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    @php

                        $relatedProducts = $produit->categories->produits->where('id', '!=', $produit->id);

                    @endphp
                    @if ($relatedProducts)
                        @foreach ($relatedProducts as $produit)
                            <div class="slick-single-layout">
                                <div class="axil-product">
                                    <div class="thumbnail">
                                        <a
                                            href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                            <img src="{{ Storage::url($produit->photo) }}" alt="Product Images">

                                            <style>
                                                .top-left {
                                                    position: absolute;
                                                    top: 8px;
                                                    left: 16px;
                                                    color: red;
                                                }
                                            </style>

                                            <div class="top-left"
                                                style="background-color: rgb(15, 14, 14);color: white;">
                                                <span>
                                                    @if ($produit->inPromotion())
                                                        <span>
                                                            -{{ $produit->inPromotion()->pourcentage }}%</span>
                                                    @endif
                                                </span>
                                            </div>
                                        </a>

                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                @if (Auth()->user())
                                                    <li class="wishlist"><a
                                                            onclick="AddFavoris({{ $produit->id }})"><i
                                                                class="far fa-heart"></i></a></li>
                                                @endif
                                                <li class="select-option"><a
                                                        onclick="AddToCart( {{ $produit->id }} )">Ajouter au
                                                        panier</a></li>
                                                <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i
                                                            class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a
                                                    href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ Str::limit($produit->nom, 15) }}</a>
                                            </h5>
                                            <div class="product-price-variant">
                                                <h6 class="product-price--main">


                                                    @if ($produit->inPromotion())
                                                        <div class="row">
                                                            <div class="col-sm-6 col-6">

                                                                <b class="text-success" style="color: #4169E1">
                                                                    {{ $produit->getPrice() }} DT
                                                                </b>
                                                            </div>

                                                            <div class="col-sm-6 col-6 text-end">



                                                                {{-- <span style="font-size: 1.2rem; color: #dc3545; font-weight: bold;">
                                                            {{ $produit->prix }} DT
                                                    </span> --}}
                                                                <span class="price old-price"
                                                                    style="position: relative; font-size: 1.2rem; color: #dc3545; font-weight: bold;">
                                                                    {{ $produit->prix }} DT
                                                                    <span
                                                                        style="position: absolute; top: 50%; left: 0; width: 100%; height: 2px; background-color: black;"></span>
                                                                </span>


                                                            </div>
                                                        @else
                                                            {{ $produit->getPrice() }}DT
                                                    @endif



                                                </h6>
                                            </div>
                                            <div class="color-variant-wrapper">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif



                </div>
            </div>

            <!-- End Axil Newsletter Area  -->
    </main>

</main>
@endsection
