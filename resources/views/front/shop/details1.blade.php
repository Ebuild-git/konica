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



    <!-- Start Breadcrumb Section -->
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Boutique</li>
                    <li class="breadcrumb-item active" aria-current="page">Détails produit</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumb Section section -->

    <!-- Start Shop Details top section -->
    <div class="shop-details-top-section mt-110 mb-110">
        <div class="container-xl container-fluid-lg container">
            <div class="row gy-5">


                <div class="col-lg-6">
                    <div class="shop-details-img">
                        <div class="tab-content" id="v-pills-tabContent">

                           {{--  <div class="shop-details-tab-img product-img--main" data-scale="1.4" data-image="{{ Storage::url($produit->photo) }}">
                                <img id="mainImage" src="{{ Storage::url($produit->photo) }}" alt="Product image" />




                            </div> --}}
                            <div class="shop-details-tab-img product-img--main" id="zoomContainer" data-scale="1.4" style="overflow: hidden; position: relative;">
                                <!-- Image principale -->
                                <img id="mainImage" src="{{ Storage::url($produit->photo) }}" alt="Product image" style="transition: transform 0.3s ease;" />
                            </div>


                        </div>

                        <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach (json_decode($produit->photos) ?? [] as $image)
                            <div class="slider__item">
                                <img onclick="changeMainImage('{{ Storage::url($image) }}')" src="{{ Storage::url($image) }}" width="80" height="80" style="border-radius: 8px;" alt="Additional product image" />
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


                <div class="col-lg-6">
                    <div class="shop-details-content">
                        <h1 style="color: rgb(19, 18, 18);">{{ $produit->nom }}</h1>
                        <div class="rating-review">

                        </div>
                        <p>{{ $produit->description }}</p>
                        <div class="price-area">
                            <p class="price">
                                @if ($produit->inPromotion())
                                <div class="row">
                                    <div class="col-sm-6">

                                        <b class="text-success" style="color: #4169E1">
                                            {{ $produit->getPrice() }} DT
                                        </b>
                                    </div>
                                    <div class="col-sm-2">

                                    </div>
                                    <div class="col-sm-4">
                                        <strike>


                                            <span class="text-danger small">
                                                {{ $produit->prix }}DT
                                            </span>


                                        </strike>
                                    </div>
                                    @else
                                    {{ $produit->getPrice() }} DT
                                    @endif
                            </p>
                        </div>
                        <div class="quantity-color-area">
                            <div class="quantity-color">
                                <h6 class="widget-title">Quantité</h6>
                                <div class="quantity-counter">
                                    <a onclick="decreaseQuantity({{ $produit->id }})" class="quantity__minus"><i class='bx bx-minus'></i></a>
                                    <input oninput="validateQuantity(this)" id="qte-{{ $produit->id }}" name="quantity" type="text" class="quantity__input" value="01">
                                    <a onclick="increaseQuantity({{ $produit->id }})" class="quantity__plus"><i class='bx bx-plus'></i></a>
                                </div>
                            </div>
                            <div class="quantity-color">

                            </div>
                        </div>
                        <div class="shop-details-btn">
                            <a onclick="AddToCart( {{ $produit->id }} )" class="primary-btn1 hover-btn3">Ajouter au
                                panier</a>
                            {{-- <a href="checkout.html" class="primary-btn1 style-3 hover-btn4">*Buy Now*</a> --}}
                        </div>
                        <div class="product-info">
                            <ul class="product-info-list">
                                <li> <span>Reference:</span> {{ $produit->reference }}</li>

                                <li> <span>Categorie:</span> <a href="#">{{ $produit->categories->nom }}</a>

                            </ul>
                        </div>

                        <ul class="product-shipping-delivers">
                            <li class="product-shipping">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 55 32">
                                    <path d="M14.9999 27.4286H10.4285C10.1254 27.4286 9.83471 27.3082 9.62038 27.0938C9.40605 26.8795 9.28564 26.5888 9.28564 26.2857C9.28564 25.9826 9.40605 25.6919 9.62038 25.4776C9.83471 25.2633 10.1254 25.1429 10.4285 25.1429H14.9999C15.303 25.1429 15.5937 25.2633 15.8081 25.4776C16.0224 25.6919 16.1428 25.9826 16.1428 26.2857C16.1428 26.5888 16.0224 26.8795 15.8081 27.0938C15.5937 27.3082 15.303 27.4286 14.9999 27.4286ZM52.1428 27.4286H49.2857C48.9825 27.4286 48.6919 27.3082 48.4775 27.0938C48.2632 26.8795 48.1428 26.5888 48.1428 26.2857C48.1428 25.9826 48.2632 25.6919 48.4775 25.4776C48.6919 25.2633 48.9825 25.1429 49.2857 25.1429H51.1942L52.7348 16.9326C52.7142 12.7314 49.1256 9.14286 44.7142 9.14286H37.2102L33.5736 25.1429H40.1428C40.4459 25.1429 40.7366 25.2633 40.9509 25.4776C41.1652 25.6919 41.2856 25.9826 41.2856 26.2857C41.2856 26.5888 41.1652 26.8795 40.9509 27.0938C40.7366 27.3082 40.4459 27.4286 40.1428 27.4286H32.1428C31.9713 27.4287 31.802 27.3902 31.6474 27.3159C31.4928 27.2417 31.3569 27.1336 31.2498 26.9997C31.1427 26.8657 31.067 26.7094 31.0285 26.5423C30.99 26.3752 30.9896 26.2016 31.0274 26.0343L35.1828 7.74858C35.2399 7.49542 35.3814 7.26924 35.5842 7.10723C35.7869 6.94521 36.0387 6.85702 36.2982 6.85715H44.7142C50.3851 6.85715 54.9999 11.472 54.9999 17.1429L53.2651 26.496C53.2165 26.7581 53.0776 26.9949 52.8726 27.1652C52.6676 27.3356 52.4094 27.4288 52.1428 27.4286Z" fill="#222222"></path>
                                    <path d="M44.7142 32C41.5645 32 39 29.4377 39 26.2857C39 23.1337 41.5645 20.5714 44.7142 20.5714C47.864 20.5714 50.4285 23.1337 50.4285 26.2857C50.4285 29.4377 47.864 32 44.7142 32ZM44.7142 22.8572C42.824 22.8572 41.2857 24.3954 41.2857 26.2857C41.2857 28.176 42.824 29.7143 44.7142 29.7143C46.6045 29.7143 48.1428 28.176 48.1428 26.2857C48.1428 24.3954 46.6045 22.8572 44.7142 22.8572ZM19.5714 32C16.4217 32 13.8571 29.4377 13.8571 26.2857C13.8571 23.1337 16.4217 20.5714 19.5714 20.5714C22.7211 20.5714 25.2857 23.1337 25.2857 26.2857C25.2857 29.4377 22.7211 32 19.5714 32ZM19.5714 22.8572C17.6811 22.8572 16.1428 24.3954 16.1428 26.2857C16.1428 28.176 17.6811 29.7143 19.5714 29.7143C21.4617 29.7143 23 28.176 23 26.2857C23 24.3954 21.4617 22.8572 19.5714 22.8572ZM15 6.85716H5.85711C5.554 6.85716 5.26331 6.73675 5.04899 6.52242C4.83466 6.30809 4.71425 6.0174 4.71425 5.7143C4.71425 5.41119 4.83466 5.1205 5.04899 4.90618C5.26331 4.69185 5.554 4.57144 5.85711 4.57144H15C15.3031 4.57144 15.5938 4.69185 15.8081 4.90618C16.0224 5.1205 16.1428 5.41119 16.1428 5.7143C16.1428 6.0174 16.0224 6.30809 15.8081 6.52242C15.5938 6.73675 15.3031 6.85716 15 6.85716ZM15 13.7143H3.57139C3.26829 13.7143 2.9776 13.5939 2.76327 13.3796C2.54894 13.1652 2.42854 12.8745 2.42854 12.5714C2.42854 12.2683 2.54894 11.9776 2.76327 11.7633C2.9776 11.549 3.26829 11.4286 3.57139 11.4286H15C15.3031 11.4286 15.5938 11.549 15.8081 11.7633C16.0224 11.9776 16.1428 12.2683 16.1428 12.5714C16.1428 12.8745 16.0224 13.1652 15.8081 13.3796C15.5938 13.5939 15.3031 13.7143 15 13.7143ZM15 20.5714H1.28568C0.982575 20.5714 0.691885 20.451 0.477557 20.2367C0.26323 20.0224 0.142822 19.7317 0.142822 19.4286C0.142822 19.1255 0.26323 18.8348 0.477557 18.6205C0.691885 18.4061 0.982575 18.2857 1.28568 18.2857H15C15.3031 18.2857 15.5938 18.4061 15.8081 18.6205C16.0224 18.8348 16.1428 19.1255 16.1428 19.4286C16.1428 19.7317 16.0224 20.0224 15.8081 20.2367C15.5938 20.451 15.3031 20.5714 15 20.5714Z">
                                    </path>
                                    <path d="M32.1428 27.4286H24.1428C23.8397 27.4286 23.549 27.3082 23.3347 27.0938C23.1203 26.8795 22.9999 26.5888 22.9999 26.2857C22.9999 25.9826 23.1203 25.6919 23.3347 25.4776C23.549 25.2633 23.8397 25.1429 24.1428 25.1429H31.2308L36.4239 2.28571H10.4285C10.1254 2.28571 9.83471 2.16531 9.62038 1.95098C9.40605 1.73665 9.28564 1.44596 9.28564 1.14286C9.28564 0.839753 9.40605 0.549063 9.62038 0.334735C9.83471 0.120408 10.1254 1.4297e-07 10.4285 1.4297e-07H37.8571C38.0286 -8.56294e-05 38.1979 0.0384228 38.3525 0.112672C38.507 0.186921 38.6429 0.295008 38.7501 0.42892C38.8572 0.562832 38.9328 0.719137 38.9713 0.886249C39.0098 1.05336 39.0102 1.227 38.9725 1.39429L33.2582 26.5371C33.2011 26.7903 33.0596 27.0165 32.8569 27.1785C32.6541 27.3405 32.4023 27.4287 32.1428 27.4286Z">
                                    </path>
                                </svg>
                                Frais de Transport: {{ $config->frais ?? ' ' }} DT
                            </li>

                        </ul>
                        <div class="compare-wishlist-area">
                            <ul>

                                <li>
                                    @if (Auth()->user())
                                    <a onclick="AddFavoris({{ $produit->id }})">
                                        <span>
                                            <svg width="11" height="11" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_168_378)">
                                                    <path d="M16.528 2.20919C16.0674 1.71411 15.5099 1.31906 14.8902 1.04859C14.2704 0.778112 13.6017 0.637996 12.9255 0.636946C12.2487 0.637725 11.5794 0.777639 10.959 1.048C10.3386 1.31835 9.78042 1.71338 9.31911 2.20854L9.00132 2.54436L8.68352 2.20854C6.83326 0.217151 3.71893 0.102789 1.72758 1.95306C1.63932 2.03507 1.5541 2.12029 1.47209 2.20854C-0.490696 4.32565 -0.490696 7.59753 1.47209 9.71463L8.5343 17.1622C8.77862 17.4201 9.18579 17.4312 9.44373 17.1868C9.45217 17.1788 9.46039 17.1706 9.46838 17.1622L16.528 9.71463C18.4907 7.59776 18.4907 4.32606 16.528 2.20919ZM15.5971 8.82879H15.5965L9.00132 15.7849L2.40553 8.82879C0.90608 7.21113 0.90608 4.7114 2.40553 3.09374C3.76722 1.61789 6.06755 1.52535 7.5434 2.88703C7.61505 2.95314 7.68401 3.0221 7.75012 3.09374L8.5343 3.92104C8.79272 4.17781 9.20995 4.17781 9.46838 3.92104L10.2526 3.09438C11.6142 1.61853 13.9146 1.52599 15.3904 2.88767C15.4621 2.95378 15.531 3.02274 15.5971 3.09438C17.1096 4.71461 17.1207 7.2189 15.5971 8.82879Z" />
                                                </g>
                                            </svg>
                                        </span>
                                        Ajouter au favoris
                                    </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Details top section -->

    <!-- Start Shop Details description section -->
    <div class="shop-details-description mb-110" id="reviews">
        <div class="container-xl container-lg-fluid container">
            <div class="row">
                <div class="col-12">
                    <div class="shop-details-description-nav mb-50">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Description</button>
                            </div>
                        </nav>
                    </div>
                    <div class="shop-details-description-tab">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                <div class="row gy-5">
                                    <div class="col-lg-12">
                                        <div class="description-content">
                                            <div class="description-center-content1">

                                                <p>{{ $produit->description }}</p>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Details description section -->

    <!-- Start Related product section -->
    <div class="newest-product-section mb-110">
        <div class="container">
            <div class="section-title2 style-2">
                <h3>Les produits de la même categorie</h3>
                <div class="slider-btn">
                    <div class="prev-btn">
                        <i class="bi bi-chevron-left"></i>
                    </div>
                    <div class="next-btn">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>

            @php

            $relatedProducts = $produit->categories->produits->where('id', '!=', $produit->id);

            @endphp
            <div class="row">
                <div class="col-12">
                    <div class="swiper newest-slider">
                        <div class="swiper-wrapper">
                            @if ($relatedProducts)
                            @foreach ($relatedProducts as $produit)
                            <div class="swiper-slide">
                                <div class="product-card hover-btn">
                                    <div class="product-card-img double-img">
                                        <a href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                            <img src="{{ Storage::url($produit->photo) }}" alt="" class="img1">
                                            <img src="{{ Storage::url($produit->photo) }}" alt="" class="img2">
                                            <style>
                                                .top-left {
                                                    position: absolute;
                                                    top: 8px;
                                                    left: 16px;
                                                    color: red;
                                                }

                                            </style>

                                            <div class="top-left" style="background-color: rgb(15, 14, 14);color: white;">
                                                <span>@if ($produit->inPromotion())
                                                    <span>
                                                        -{{ $produit->inPromotion()->pourcentage }}%</span>
                                                    @endif</span>
                                            </div>
                                        </a>
                                        <div class="overlay">
                                            <div class="cart-area">
                                                <a onclick="AddToCart( {{ $produit->id }} )" class="hover-btn3 add-cart-btn"><i class="bi bi-bag-check"></i> Ajouter au panier</a>
                                            </div>
                                        </div>
                                        <div class="view-and-favorite-area">
                                            <ul>
                                                <li>
                                                    @if (Auth()->user())
                                                    <a onclick="AddFavoris({{ $produit->id }})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                            <g clip-path="url(#clip0_168_378)">
                                                                <path d="M16.528 2.20919C16.0674 1.71411 15.5099 1.31906 14.8902 1.04859C14.2704 0.778112 13.6017 0.637996 12.9255 0.636946C12.2487 0.637725 11.5794 0.777639 10.959 1.048C10.3386 1.31835 9.78042 1.71338 9.31911 2.20854L9.00132 2.54436L8.68352 2.20854C6.83326 0.217151 3.71893 0.102789 1.72758 1.95306C1.63932 2.03507 1.5541 2.12029 1.47209 2.20854C-0.490696 4.32565 -0.490696 7.59753 1.47209 9.71463L8.5343 17.1622C8.77862 17.4201 9.18579 17.4312 9.44373 17.1868C9.45217 17.1788 9.46039 17.1706 9.46838 17.1622L16.528 9.71463C18.4907 7.59776 18.4907 4.32606 16.528 2.20919ZM15.5971 8.82879H15.5965L9.00132 15.7849L2.40553 8.82879C0.90608 7.21113 0.90608 4.7114 2.40553 3.09374C3.76722 1.61789 6.06755 1.52535 7.5434 2.88703C7.61505 2.95314 7.68401 3.0221 7.75012 3.09374L8.5343 3.92104C8.79272 4.17781 9.20995 4.17781 9.46838 3.92104L10.2526 3.09438C11.6142 1.61853 13.9146 1.52599 15.3904 2.88767C15.4621 2.95378 15.531 3.02274 15.5971 3.09438C17.1096 4.71461 17.1207 7.2189 15.5971 8.82879Z" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    @endif
                                                </li>
                                                {{-- <li>
                                                    <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" viewBox="0 0 22 22">
                                                            <path
                                                                d="M21.8601 10.5721C21.6636 10.3032 16.9807 3.98901 10.9999 3.98901C5.019 3.98901 0.335925 10.3032 0.139601 10.5718C0.0488852 10.6961 0 10.846 0 10.9999C0 11.1537 0.0488852 11.3036 0.139601 11.4279C0.335925 11.6967 5.019 18.011 10.9999 18.011C16.9807 18.011 21.6636 11.6967 21.8601 11.4281C21.951 11.3039 21.9999 11.154 21.9999 11.0001C21.9999 10.8462 21.951 10.6963 21.8601 10.5721ZM10.9999 16.5604C6.59432 16.5604 2.77866 12.3696 1.64914 10.9995C2.77719 9.62823 6.58487 5.43955 10.9999 5.43955C15.4052 5.43955 19.2206 9.62969 20.3506 11.0005C19.2225 12.3717 15.4149 16.5604 10.9999 16.5604Z" />
                                                            <path
                                                                d="M10.9999 6.64832C8.60039 6.64832 6.64819 8.60051 6.64819 11C6.64819 13.3994 8.60039 15.3516 10.9999 15.3516C13.3993 15.3516 15.3515 13.3994 15.3515 11C15.3515 8.60051 13.3993 6.64832 10.9999 6.64832ZM10.9999 13.9011C9.40013 13.9011 8.09878 12.5997 8.09878 11C8.09878 9.40029 9.40017 8.0989 10.9999 8.0989C12.5995 8.0989 13.9009 9.40029 13.9009 11C13.9009 12.5997 12.5996 13.9011 10.9999 13.9011Z" />
                                                        </svg>
                                                    </a>
                                                </li> --}}
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="product-card-content">
                                        <p><a href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ $produit->nom }}</a></p>
                                    </div>
                                    <div class="product__price__wrapper">
                                        <h6 class="product-price--main">

                                            @if ($produit->inPromotion())
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <b class="text-success" style="color: #4169E1">
                                                        {{ $produit->getPrice() }} DT
                                                    </b>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                                <div class="col-sm-4">
                                                    <strike>


                                                        <span class="text-danger small">
                                                            {{ $produit->prix }}DT
                                                        </span>


                                                    </strike>
                                                </div>
                                                @else
                                                {{ $produit->getPrice() }}DT
                                                @endif


                                        </h6>
                                    </div>
                                    <span class="for-border"></span>
                                </div>
                            </div>
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>
@endsection
