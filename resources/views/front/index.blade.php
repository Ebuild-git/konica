@extends('front.fixe')
@section('titre', 'Accueil')
@section('body')
    <main>
        @php
            $config = DB::table('configs')->first();
            $service = DB::table('services')->get();
            $produit = DB::table('produits')->get();
        @endphp

        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 --}}
 <style>
    .axil-breadcrumb-item1 {
font-size: 14px;
color: #EFB121; /* Default breadcrumb color */
}

.axil-breadcrumb-item.active {
font-weight: bold;
color: #EFB121; /* Distinct color for active item */
}

.axil-breadcrumb-item:not(.active)::after {
content: " / "; /* Adds a separator after non-active items */
color: #EFB121;
}

</style>
        <main class="main-wrapper">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
                <style>
                    .carousel-item {
                        height: 600px;


                        background-size: cover;

                        background-position: center;

                    }

                    .main-slider-content {
                        margin-top: 300px;

                        color: white;

                    }
                </style>
                <div class="carousel-inner">
                    @foreach ($banners as $key => $banner)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}"
                            style="background-image: url('{{ Storage::url($banner->image) }}');">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <div class="main-slider-content">
                                            <span class="subtitle"><i class="fas fa-fire"></i>
                                                {{ $banner->titre ?? '' }}</span>
                                            <p style="font-size: 1.5rem;   color: #ffffff;  margin-top: 10px; ">
                                                {{ $banner->sous_titre ?? '' }}</p>
                                            <div class="shop-btn">
                                                <a href="{{ route('shop') }}" class="axil-btn btn-bg-secondary right-icon">
                                                    Voir boutique <i class="fal fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



            <!-- End Slider Area -->
            <!-- Start Categorie Area  -->
            <!-- Start Categorie Area  -->
            <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
                <div class="container">
                    <div class="section-title-wrapper">
                        <h4>   <span class="axil-breadcrumb-item1 active" aria-current="page"> <i class="far fa-tags"></i> Categories</span> </h4>
                        <h2 class="title">Parcourir par categories</h2>
                    </div>
                    <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">

                        @foreach ($categories as $category)
                            <div class="slick-single-layout">
                                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200"
                                    data-sal-duration="500">
                                    <a href="/category/{{ $category->id }}"
                                        class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}">
                                        <img {{-- class="img-fluid" --}} src="{{ Storage::url($category->photo) }}" width="200"
                                            border-radius="8px" height="200" class="rounded shadow"
                                            alt="product categorie">
                                        {{--  <img class="img-fluid" src="./assets/images/product/categories/elec-4.png" alt="product categorie"> --}}
                                        <h6 class="cat-title">{{ $category->nom ?? '' }}</h6>
                                    </a>
                                </div>
                                <!-- End .categrie-product -->
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>


            <div class="axil-product-area bg-color-white axil-section-gap">
                <div class="container">
                    <div class="section-title-wrapper">
                       
                            <h4>   <span class="axil-breadcrumb-item1 active" aria-current="page"> <i class="far fa-shopping-basket"></i> Nos produits</span> </h4>

                        <h2 class="title">Parcourir nos Produits</h2>
                    </div>
                    <div
                        class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                        <div class="slick-single-layout">
                            <div class="row row--15">
                                @foreach ($produits as $produit)
                                    @if ($produit)
                                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                            <div class="axil-product product-style-one">
                                                <div class="thumbnail">
                                                    <a
                                                        href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                                        <img data-sal="zoom-out" data-sal-delay="200"
                                                            data-sal-duration="800" loading="lazy" class="main-img"
                                                            border-radius="8px" src="{{ Storage::url($produit->photo) }}"
                                                            alt="Product Images">
                                                        <img class="hover-img" border-radius="8px"
                                                            src="{{ Storage::url($produit->photo) }}" alt="Product Images">
                                                    </a>

                                                    <style>
                                                        .top-left {
                                                            position: absolute;
                                                            top: 8px;
                                                            right: 18px;
                                                            color: #EFB121;
                                                        }
                                                    </style>

                                                    <div class="top-left"
                                                        style="background-color: #EFB121;color: white;">
                                                        <span>
                                                            @if ($produit->inPromotion())
                                                                <span>
                                                                    -{{ $produit->inPromotion()->pourcentage }}%</span>
                                                            @endif
                                                        </span>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul class="cart-action">
                                                            {{--     <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#{{ $produit->id }}"><i
                                                                        class="far fa-eye"></i></a></li> --}}
                                                            <li class="select-option2">
                                                                <a onclick="AddToCart( {{ $produit->id }} )">
                                                                    Ajouter au panier
                                                                </a>
                                                            </li>
                                                            @if (Auth()->user())
                                                                <li class="wishlist"><a
                                                                        onclick="AddFavoris({{ $produit->id }})"><i
                                                                            class="far fa-heart"></i></a></li>
                                                            @endif

                                                            <style>
                                                                .select-option2 {
                                                                    background-color: #5EA13C;
                                                                    color: #ffffff;
                                                                    border: none;
                                                                    padding: 10px 20px;
                                                                    border-radius: 5px;
                                                                    text-decoration: none;
                                                                }
                                                            </style>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="inner">
                                                        <div class="product-rating">

                                                        </div>

                                                        <div class="">
                                                            <h5 class="title"><a
                                                                    href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ Str::limit($produit->nom, 15) }}</a>
                                                            </h5>
                                                        </div>
                                                        <div class="product__price__wrapper">
                                                            <h6 class="product-price--main">


                                                                @if ($produit->inPromotion())
                                                                    <div class="row">
                                                                        <div class="col-sm-6 col-6">

                                                                            <b class="text-success"
                                                                                style="color: #4169E1">
                                                                                {{ $produit->getPrice() }} DT
                                                                            </b>
                                                                        </div>

                                                                        <div class="col-sm-6 col-6 text-end">
                                                                            <strike>


                                                                                <span
                                                                                    style="font-size: 1.7rem; color: #dc3545; font-weight: bold;">
                                                                                    {{ $produit->prix }} DT
                                                                                </span>


                                                                            </strike>
                                                                        </div>
                                                                    @else
                                                                      {{--   {{ $produit->getPrice() }}DT --}}

                                                                      
                                                                <span class="price current-price"  style="font-size: 1.7rem;"> 
                                                                    {{ $produit->getPrice() }} DT
                                                                </b></span>
                                                                @endif


                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center mt--20 mt_sm--0">
                            <a href="{{ route('shop') }}" class="axil-btn btn-bg-primary2 btn-load-more">Voir tous les
                                Produits</a>
                        </div>
                    </div>

                </div>
            </div>



            <!-- Product Quick View Modal Start -->
            @if ($produits)
                @foreach ($produits as $key => $produit)
                    <div class="modal fade quick-view-product" id="{{ $produit->id }}" tabindex="-1"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="far fa-times"></i></button>
                                </div>
                                <div class="modal-body">
                                    <div class="single-product-thumb">
                                        <div class="row">
                                            <div class="col-lg-7 mb--40">
                                                {{--  <div class="col-lg-6"> --}}
                                                <div class="shop-details-img">
                                                    <div class="tab-content" id="v-pills-tabContent">

                                                        <div class="shop-details-tab-img product-img--main"
                                                            id="zoomContaine" data-scale="1.4"
                                                            style="overflow: hidden; position: relative;">

                                                            <img id="mainImage" src="{{ Storage::url($produit->photo) }}"
                                                                height="600" width="600" alt="Product image"
                                                                style="transition: transform 0.3s ease;" />
                                                        </div>


                                                    </div>
                                                    <br><br>

                                                    <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                                        aria-orientation="vertical">
                                                        @foreach (json_decode($produit->photos) ?? [] as $image)
                                                            <div class="slider__item">
                                                                <img onclick="changeMainImage('{{ Storage::url($image) }}')"
                                                                    src="{{ Storage::url($image) }}" width="100"
                                                                    height="100" style="border-radius: 8px;"
                                                                    alt="Additional product image" />
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
                                                    const zoomContaine = document.getElementById('zoomContaine');
                                                    const mainImage = document.getElementById('mainImage');
                                                    const scale = zoomContaine.getAttribute('data-scale') || 1.4;


                                                    zoomContaine.addEventListener('mouseover', function() {
                                                        mainImage.style.transform = `scale(${scale})`;
                                                        mainImage.style.cursor = "zoom-in";
                                                    });


                                                    zoomContaine.addEventListener('mouseout', function() {
                                                        mainImage.style.transform = "scale(1)";
                                                    });


                                                    function changeMainImage(imageUrl) {
                                                        mainImage.src = imageUrl;
                                                        mainImage.style.transform = "scale(1)";
                                                    }
                                                </script>




                                            </div>

                                            <div class="col-lg-5 mb--40">
                                                <div class="single-product-content">
                                                    <div class="inner">

                                                        <h3 class="product-title">{{ $produit->nom }}</h3>
                                                        <span class="price-amount">
                                                            @if ($produit->inPromotion())
                                                                <b class="text-success" style="color: #4169E1">
                                                                    {{ $produit->getPrice() }} DT
                                                                </b>

                                                                <span
                                                                    style="position: relative; font-size: 1.5rem; color: #dc3545; font-weight: bold;">
                                                                    {{ $produit->prix }} DT
                                                                    <span
                                                                        style="position: absolute; top: 50%; left: 0; width: 100%; height: 2px; background-color: black;"></span>
                                                                </span>
                                                            @else
                                                                {{ $produit->getPrice() }}DT
                                                            @endif
                                                        </span>
                                                        <ul class="product-meta">
                                                            @if ($produit->stock > 0)
                                                                <label class="badge btn-bg-primary2"> Stock disponible</label>
                                                            @else
                                                                <label class="badge bg-danger"> Stock non
                                                                    disponible</label>
                                                            @endif

                                                            <li>Categorie:<span>
                                                                    {{ Str::limit($produit->categories->nom, 30) }}</span>
                                                            </li>
                                                            <li> <span>Reference:</span> {{ $produit->reference }}</li>
                                                        </ul>
                                                        <p class="description">{!! $produit->description !!}</p>

                                                        <div class="product-variations-wrapper">


                                                        </div>


                                                        <div class="product-action-wrapper d-flex-center">

                                                            <div class="pro-qty">
                                                                <span class="quantity-control minus"></span>
                                                                <input type="number" class="input-text qty text"
                                                                    name="quantite" min="1" value="1"
                                                                    id="qte-{{ $produit->id }}" autocomplete="off">
                                                                <span class="quantity-control plus"></i></span>
                                                            </div>

                                                            <ul class="product-action d-flex-center mb--0">
                                                                <li class="add-to-cart"><a
                                                                        onclick="AddToCart( {{ $produit->id }} )"
                                                                        class="axil-btn btn-bg-primary2">Ajouter au
                                                                        panier</a></li>
                                                                @if (Auth()->user())
                                                                    <li class="wishlist"><a
                                                                            onclick="AddFavoris({{ $produit->id }})"><i
                                                                                class="far fa-heart"></i></a></li>
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
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <br><br>

            <!-- Start About Area  -->
            <div class="about-info-area">
                <div class="container">
                    <div class="row row--20">
                        <div class="col-lg-4">
                            <div class="about-info-box">
                                <div class="thumb">
                                    <img src="{{ Storage::url($config->icone_satisfaction ?? '') }}" width="100" height="100" alt="Shape">
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ $config->satisfaction ?? '' }}+ {{ $config->titre_satisfaction ?? ' ' }}</h3>
                                    <p style="text-align: justify">{!! $config->des_satisfaction ?? ' ' !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-info-box">
                                <div class="thumb">
                                    <img src="{{ Storage::url($config->icone_annee ?? ' ')  }}" height="100" width="100" alt="Shape">
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ $config->annee ?? ' ' }} {{ $config->titre_annee ?? ' ' }}.</h3>
                                    <p style="text-align: justify">{!! $config->des_annee ?? ' ' !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-info-box">
                                <div class="thumb">
                                    <img src="{{ Storage::url($config->icone_prix ?? ' ') }}" height="100" width="100" alt="Shape">
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ $config->prix ?? ' ' }} {{ $config->titre_prix ?? ' ' }}.</h3>
                                    <p style="text-align: justify">{!! $config->des_prix ?? ' ' !!}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About Area  -->

            <br><br>


            <!-- Start Expolre Product Area  -->
            <div class="axil-product-area bg-color-white axil-section-gapcommon">
                <div class="container">
                    <div class="section-title-border slider-section-title">
                        <h2 class="title">Produits en Promotion 💥</h2>
                    </div>
                    <div
                        class="popular-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-angle angle-top-slide">
                        <div class="slick-single-layout">
                            <div class="row">
                                @if ($produits)
                                    @foreach ($produits as $key => $produit)
                                        @if ($produit->inPromotion())
                                            <div class="col-md-6 col-12">
                                                <div class="axil-product product-style-eight product-list-style-3">
                                                    <div class="thumbnail">
                                                        <a
                                                            href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                                            <img class="main-img" width="300" height="300"
                                                                src="{{ Storage::url($produit->photo) }}"
                                                                alt="Product Images">

                                                                <style>
                                                                    .top-left {
                                                                        position: absolute;
                                                                        top: 8px;
                                                                        right: 18px;
                                                                        color: #EFB121;
                                                                    }

                                                                    .top-right {
                                                                        position: absolute;
                                                                        top: -30px;
                                                                        right: 18px;
                                                                        color: #EFB121;
                                                                    }
                                                                </style>
            
                                                                <div class="top-left"
                                                                    style="background-color:#EFB121;color: white;">
                                                                    <span>
                                                                        @if ($produit->inPromotion())
                                                                            <span>
                                                                                -{{ $produit->inPromotion()->pourcentage }}%</span>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                        </a>

                                                        
                                                    </div>
                                                    <div class="product-content">
                                                        <div class=" col-sm-12 inner">
                                                            <div class="top-right">
                                                                @if ($produit->stock > 0)
                                                                <label class="badge btn-bg-primary2"> Stock disponible</label>
                                                            @else
                                                                <label class="badge bg-danger"> Stock non disponible</label>
                                                            @endif
                    
                                                           
                                                            </div>

                                                            <div class="product-cate"><a
                                                                    href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ $produit->nom }}</a>
                                                            </div>
                                                            <div class="color-variant-wrapper">
                                                        
                                                            </div>
                                                            <h5 class="title"><a
                                                                    href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ Str::limit($produit->description, 20) }}
                                                                </a></h5>
                                                            <div class="product-rating">
                                                        
                                                            </div>
                                                            <div class="product-price-variant">
                                                                <span class="price-text">Prix</span>
                                                                <span class="price current-price"> <b class="text-success"
                                                                        style="color: #4169E1">
                                                                        {{ $produit->getPrice() }} DT
                                                                    </b></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                {{--     <ul class="product-meta">
                                                        @if ($produit->stock > 0)
                                                            <label class="badge bg-success"> Stock disponible</label>
                                                        @else
                                                            <label class="badge bg-danger"> Stock non disponible</label>
                                                        @endif
                
                                                        <li>Categorie:<span> {{ Str::limit($produit->categories->nom, 30) }}</span>
                                                        </li>
                                                        <li> <span>Reference:</span> {{ $produit->reference }}</li>
                                                    </ul> --}}
                                                   
                                                 {{--    <div class="label-block label-right">
                                                        <div class="product-badget sold-out">
                                                            @if ($produit->stock > 0)
                                                                <label class="badge bg-success"> Stock disponible</label>
                                                            @else
                                                                <label class="badge bg-danger"> Stock non
                                                                    disponible</label>
                                                            @endif
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Expolre Product Area  -->

            <!-- Start Testimonila Area  -->
            <div class="axil-testimoial-area axil-section-gap bg-vista-white">
                <div class="container">
                    <div class="section-title-wrapper">
                        <h4>   <span class="axil-breadcrumb-item1 active" aria-current="page"> <i
                            class="fal fa-quote-left"></i>  Témoignages</span> </h4>

                        
                        <h2 class="title">Les retours de nos clients</h2>
                    </div>
                    
                    <!-- End .section-title -->
                    <div
                        class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">

                        @if ($testimonials->isEmpty())
                            <p>Aucun témoignage disponible.</p>
                        @else
                            @foreach ($testimonials as $testimonial)
                                <div class="slick-single-layout testimonial-style-one">
                                    <div class="review-speech">
                                        <p>“{!! $testimonial->message !!} “</p>
                                    </div>
                                    <div class="media">
                                        <div class="thumbnail">
                                            @if ($testimonial->photo)
                                                <img src="{{ asset('uploads/testimonials/' . $testimonial->photo) }}"
                                                    alt="Photo Témoignage" width="100" height="100">
                                            @else
                                                <img src="./assets/images/testimonial/image-1.png"
                                                    alt="testimonial image">
                                            @endif

                                        </div>
                                        <div class="media-body">
                                            <span class="designation">{{ $testimonial->name }}</span>
                                            {{-- <h6 class="title">James C. Anderson</h6> --}}
                                        </div>
                                    </div>
                                    <!-- End .thumbnail -->
                                </div>
                            @endforeach
                        @endif

                        <!-- End .slick-single-layout -->

                    </div>

                </div>
                <br><br>
                <br>
                <div class="col-12 d-flex justify-content-center">
                    <div class="form-group mb--0">
                        <button class="axil-btn btn-bg-primary2" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            type="submit">
                            <span>Laisser un témognage</span>
                        </button>
                    </div>
    
                </div>

                  
            <div id="successMessage" class="alert alert-success" style="display:none;"></div>
            <div id="errorMessage" class="alert alert-danger" style="display:none;"></div>


           
            </div>

 
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Témoignage</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>



                        <div class="modal-body">
                            <form id="testimonialForm" action="{{ route('testimonial.store') }}" method="POST"
                                class="testimonial-form p-4 rounded shadow-sm bg-light">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="name" class="form-label text-muted">Nom</label>
                                    <input type="text" class="form-control border-0 rounded-pill shadow-sm"
                                        id="name" name="name" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="testimonial" class="form-label text-muted">Message</label>
                                    <textarea class="form-control border-0 rounded-3 shadow-sm" id="testimonial" name="message" rows="8" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-bg-primary2 rounded-pill shadow">Envoyer</button>
                                </div>
                            </form>

                            @if ($errors->any())
                                <div class="alert alert-danger mt-4">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success mt-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <style>
                                .testimonial-form {
                                    max-width: 600px;
                                    margin: 0 auto;
                                    background-color: #f8f9fa;
                                }

                                .form-group {
                                    margin-bottom: 1.5rem;
                                }

                                .form-label {
                                    font-weight: 600;
                                    font-size: 1rem;
                                }

                                .form-control {
                                    padding: 0.75rem 1rem;
                                    font-size: 1rem;
                                    color: #495057;
                                    background-color: #fff;
                                    border-radius: 25px;
                                }

                                textarea.form-control {
                                    border-radius: 15px;
                                }

                                button.btn {
                                    padding: 0.5rem 2rem;
                                    font-size: 1.125rem;
                                    transition: background-color 0.3s ease;
                                }

                                button.btn-primary {
                                    background-color: #EFB121;
                                    border-color: #EFB121;
                                }

                                button.btn-primary:hover {
                                    background-color: #EFB121;
                                    border-color: #EFB121;
                                }

                                .alert {
                                    max-width: 600px;
                                    margin: 1rem auto;
                                }
                            </style>

                        </div>



                    </div>
                </div>
            </div>
          
           {{--  <div class="axil-team-area bg-wild-sand">
                <div class="team-left-fullwidth">
                    <div class="container ml--xxl-0">
                        <div class="section-title-wrapper">
                            <span class="title-highlighter highlighter-primary"> <i class="fas fa-users"></i>Nos
                                marques</span>
                            <h3 class="title">Recherchez les produits par marque</h3>
                        </div>
                        <style>
                            .fixed-size {
                                width: 200px;
                                height: 200px;
                                object-fit: cover;
                                border-radius: 8px;
                               
                            }

                            

.slick-single-layout {
    flex: 0 0 auto;
    scroll-snap-align: start;
    padding: 0; 
    margin: 0; 
    background: none; 
}

.thumbnails a {
    display: block; 
    padding: 0;
    margin: 0;
}


                        </style>
                        <div class="team-slide-activation">
                            @foreach ($marques as $marque)
                                <div class="slick-single-layout">
                                    <div class="axil-team-member">
                                        <div class="thumbnails">
                                            <a href="/marque/{{ $marque->id }}"
                                                class="{{ isset($current_marque) && $current_marque->id === $marque->id ? 'selected' : '' }}">
                                                <img src="{{ Storage::url($marque->image) }}" class="fixed-size" 
                                                     alt="Image de la marque {{ $marque->name }}">
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <h5>{{ $marque->name }}</h5>
                                            <p>{{ $marque->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            
                        </div>
                        
                      
                    </div>
                </div>
            </div> --}}
            <br><br><br>
{{-- 
            <div class="service-area">
                <div class="container">
                    <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                        <div class="col">
                            <div class="service-box service-style-2">
                                <div class="icon">
                                    <img src="./assets/images/icons/service1.png" alt="Service">
                                </div>
                                <div class="content">
                                    <h6 class="title">Livraison &amp;rapide et sécurisée</h6>
                                    <p>Parlez de votre service.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-box service-style-2">
                                <div class="icon">
                                    <img src="./assets/images/icons/service2.png" alt="Service">
                                </div>
                                <div class="content">
                                    <h6 class="title">Garantie de remboursement
                                    </h6>
                                    <p>Dans les 10 jours.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-box service-style-2">
                                <div class="icon">
                                    <img src="./assets/images/icons/service3.png" alt="Service">
                                </div>
                                <div class="content">
                                    <h6 class="title">Politique de retour de 24 heures</h6>
                                    <p>Ne posez aucune question.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-box service-style-2">
                                <div class="icon">
                                    <img src="./assets/images/icons/service4.png" alt="Service">
                                </div>
                                <div class="content">
                                    <h6 class="title">Assistance de qualité professionnelle</h6>
                                    <p>Assistance en direct 24h/24 et 7j/7.</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 --}}
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#testimonialForm').on('submit', function(e) {
                        e.preventDefault(); // Empêcher l'envoi classique du formulaire

                        $.ajax({
                            url: $(this).attr('action'),
                            method: $(this).attr('method'),
                            data: $(this).serialize(),
                            success: function(response) {
                                // Afficher le message de succès
                                $('#testimonialModal').modal('hide'); // Fermer le modal

                                $('#successMessage').text(
                                    'Témoignage créé avec succès! Il sera valide après confirmation des administrateurs'
                                ).show();

                                setTimeout(function() {
                                    location.reload();
                                }, 5000);
                            },
                            error: function(response) {
                                // Afficher un message d'erreur si nécessaire
                                $('#errorMessage').text('Une erreur est survenue.')
                                    .show(); // Afficher le message d'erreur
                            }
                        });
                    });
                });
            </script>



<style>
    .btn-bg-primary2 {
        background-color: #5EA13C;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }
</style>

        </main>



    </main>


@endsection
