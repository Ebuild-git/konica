@extends('front.fixe')
@section('titre', 'Accueil')
@section('body')
    <main>
        @php
            $config = DB::table('configs')->first();
            $service = DB::table('services')->get();
            $produit = DB::table('produits')->get();
        @endphp

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
                    <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i> Categories</span>
                    <h2 class="title">Parcourir par categories</h2>
                </div>
                <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    
                    @foreach ($categories as $category) 
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                            <a href="/category/{{ $category->id }}"
                                class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}">
                                <img class="img-fluid" src="{{ Storage::url($category->photo) }}" width="100" height="100" alt="product categorie">
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
        <!-- End Categorie Area  -->

        
            <!-- Start Expolre Product Area  -->
          
        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Nos Produits</span>
                    <h2 class="title">Parcourir nos Produits</h2>
                </div>
                <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">
                            @foreach ($produits as $produit)
                            @if ($produit)
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a  href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img" src="{{ Storage::url($produit->photo) }}" alt="Product Images">
                                            <img class="hover-img" src="{{ Storage::url($produit->photo) }}" alt="Product Images">
                                        </a>
                                        {{-- <div class="label-block label-right">
                                            <div class="product-badget"><span>@if ($produit->inPromotion())
                                                <span>
                                                    -{{ $produit->inPromotion()->pourcentage }}%</span>
                                            @endif</span></div>
                                        </div> --}}
                                        <style>
                                                          
                                            .top-left {
                                                position: absolute;
                                                top: 8px;
                                                right: 18px;
                                                color: red;
                                            }

                                      
                                        
                                        
                        </style>
                   
                        <div class="top-left"  style="background-color: rgb(237, 16, 16);color: white;">
                            <span>@if ($produit->inPromotion())
                                <span>
                                    -{{ $produit->inPromotion()->pourcentage }}%</span>
                            @endif</span>
                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#{{ $produit->id }}"><i class="far fa-eye"></i></a></li>
                                                <li class="select-option">
                                                    <a onclick="AddToCart( {{ $produit->id }} )">
                                                        Ajouter au panier
                                                    </a>
                                                </li>
                                                @if (Auth()->user())
                                                <li class="wishlist"><a onclick="AddFavoris({{ $produit->id }})"><i class="far fa-heart"></i></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <div class="product-rating">
                                               {{--  <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                                <span class="rating-number">(64)</span> --}}
                                            </div>
                                           {{--  <h5 class="title"><a href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ $produit->nom ?? ' ' }}</a></h5>
                                            --}} {{-- <div class="product-price-variant">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div> --}}
                                            <div class="">
                                                <h5 class="title"><a   href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ Str::limit($produit->nom, 15) }}</a></h5>
                                            </div>
                                            <div class="product__price__wrapper">
                                                <h6 class="product-price--main">
    
                                                  
                                                    @if ($produit->inPromotion())
                                                    <div class="row">
                                                        <div class="col-sm-6 col-6">
    
                                                            <b class="text-success" style="color: #4169E1">
                                                                {{ $produit->getPrice() }} DT
                                                            </b>
                                                        </div>
                                                       
                                                        <div class="col-sm-6 col-6 text-end">
                                                            <strike>
    
    
                                                                <span style="font-size: 1.2rem; color: #dc3545; font-weight: bold;">
                                                                    {{ $produit->prix }} DT
                                                                </span>
    
    
                                                            </strike>
                                                        </div>
                                                    @else
                                                        {{ $produit->getPrice() }}DT
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
                    <!-- End .slick-single-layout -->
                    
                    <!-- End .slick-single-layout -->
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <a href="{{ route('shop') }}" class="axil-btn btn-bg-lighter btn-load-more">Voir tous les Produits</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Expolre Product Area  -->
      {{--   @if($produits)
        @foreach($produits as $key=>$produit)
        <div class="modal fade quick-view-product" id="{{ $produit->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="single-product-thumb">
                            <div class="row">
                                <div class="col-lg-7 mb--40">
                                    <div class="row">
                                        <div class="col-lg-10 order-lg-2">
                                            <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                                <div class="thumbnail">
                                                    <img id="mainImage" src="{{ Storage::url($produit->photo) }}" width="50 " height="50 "
                                                    border-radius="8px" alt="Product image" />
                                                    <div class="label-block label-right">
                                                        <div class="product-badget">20% OFF</div>
                                                    </div>
                                                    <div class="product-quick-view position-view">
                                                        <a src="{{ Storage::url($produit->photo) }}" class="popup-zoom">
                                                            <i class="far fa-search-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="col-lg-2 order-lg-1">
                                            <div class="product-small-thumb small-thumb-wrapper">
                                                <div class="small-thumb-img">
                                                    @foreach (json_decode($produit->photos) ?? [] as $image)
                                                    <div class="slider__item">
                                                        <img onclick="changeMainImage('{{ Storage::url($image) }}')" src="{{ Storage::url($image) }}" width="100" height="100" style="border-radius: 8px;" alt="Additional product image" />
                                                    </div>
                                                @endforeach
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 mb--40">
                                    <div class="single-product-content">
                                        <div class="inner">
                                            <div class="product-rating">
                                            
                                            </div>
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
                                                     
                                                          
                                                            <span style="position: relative; font-size: 1.2rem; color: #dc3545; font-weight: bold;">
                                                                {{ $produit->prix }} DT
                                                                <span style="position: absolute; top: 50%; left: 0; width: 100%; height: 2px; background-color: black;"></span>
                                                            </span>
                                                            
                                                       
                                                    </div>
                                                @else
                                                    {{ $produit->getPrice() }}DT
                                            @endif
                                            </span>
                                            <ul class="product-meta">
                                              
                                                @if ($produit->stock > 0)
                                                <label class="badge bg-success"> Stock disponible</label>
                                            @else
                                                <label class="badge bg-danger"> Stock non disponible</label>
                                            @endif
                                             
                                            <li>Categorie:<span> {{ Str::limit($produit->categories->nom, 30) }}</span>
                                            </li>
                                                 </ul>
                                            <p class="description">{{ $produit->description ?? ' ' }}</p>
    
                                            <div class="product-variations-wrapper">
    
                                               
                                                <div class="product-variation">
                                               
                                                </div>
                                            
                                                <div class="product-variation">
                                              
                                                </div>
                                          
    
                                            </div>
    
                                         
                                            <div class="product-action-wrapper d-flex-center">
                                                
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                                
    
                                                <ul class="product-action d-flex-center mb--0">
                                                    <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                                </ul>
                                               
    
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

        @endforeach
        @endif
          --}}
            <!-- Start Expolre Product Area  -->
            <div class="axil-new-arrivals-product-area fullwidth-container flash-sale-area section-gap-80-35">
                <div class="container ml--xxl-0">
                    <div class="section-title-border slider-section-title">
                        <h2 class="title">Publication Réscentes 💥</h2>
                    </div>
                    <div class="recently-viwed-activation slick-layout-wrapper--15 axil-slick-angle angle-top-slide">
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-eight">
                                <div class="thumbnail">
                                    <a href="single-product-8.html">
                                        <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800"
                                            loading="lazy" class="main-img"
                                            src="assets/images/product/fashion/product-26.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-left">
                                        <div class="product-badget sale">Sale</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="single-product-8.html">
                                                    <i class="far fa-shopping-cart"></i> Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product-8.html">Kalrez® Spectrum™ 6375</a></h5>
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">6,400</span>
                                        </div>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$30.00</span>
                                            <span class="price current-price">$17.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-eight">
                                <div class="thumbnail">
                                    <a href="single-product-8.html">
                                        <img data-sal="zoom-out" data-sal-delay="150" data-sal-duration="800"
                                            loading="lazy" class="main-img"
                                            src="assets/images/product/fashion/product-27.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-left">
                                        <div class="product-badget">20% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="single-product-8.html">
                                                    <i class="far fa-shopping-cart"></i> Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product-8.html">Calvin Klein womens Solid
                                                Sheath With Chiffon Bell Sleeves Dress</a></h5>
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">6,400</span>
                                        </div>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$100.00</span>
                                            <span class="price current-price">$78.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-eight">
                                <div class="thumbnail">
                                    <a href="single-product-8.html">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                            loading="lazy" class="main-img"
                                            src="assets/images/product/fashion/product-28.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-left">
                                        <div class="product-badget">TOP SELLING</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="single-product-8.html">
                                                    <i class="far fa-shopping-cart"></i> Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product-8.html">Gildan Men's Ultra Cotton
                                                T-Shirt, Style G2000,</a></h5>
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">6,400</span>
                                        </div>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$20.00</span>
                                            <span class="price current-price">$17.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-eight">
                                <div class="thumbnail">
                                    <a href="single-product-8.html">
                                        <img data-sal="zoom-out" data-sal-delay="250" data-sal-duration="800"
                                            loading="lazy" class="main-img"
                                            src="assets/images/product/fashion/product-29.png" alt="Product Images">
                                    </a>
                                    <div class="label-block label-left">
                                        <div class="product-badget sold-out">SOLD OUT</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="single-product-8.html">
                                                    <i class="far fa-shopping-cart"></i> Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product-8.html">Essentials Men's Regular-Fit
                                                Short-Sleeve Crewneck T-Shirt</a></h5>
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">6,400</span>
                                        </div>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$12.00</span>
                                            <span class="price current-price">$5.22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-eight">
                                <div class="thumbnail">
                                    <a href="single-product-8.html">
                                        <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800"
                                            loading="lazy" class="main-img"
                                            src="assets/images/product/fashion/product-30.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="single-product-8.html">
                                                    <i class="far fa-shopping-cart"></i> Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product-8.html">2.4G Remote Control Rc BB-8
                                                Droid Football Robot</a></h5>
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">1,300</span>
                                        </div>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-eight">
                                <div class="thumbnail">
                                    <a href="single-product-8.html">
                                        <img data-sal="zoom-out" data-sal-delay="150" data-sal-duration="800"
                                            loading="lazy" class="main-img"
                                            src="assets/images/product/fashion/product-31.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="single-product-8.html">
                                                    <i class="far fa-shopping-cart"></i> Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product-8.html">Perfume Nat White Chocolate
                                                Flavor WONF (BD-10914)</a></h5>
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">2,300</span>
                                        </div>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$14.81</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-eight">
                                <div class="thumbnail">
                                    <a href="single-product-8.html">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                            loading="lazy" class="main-img"
                                            src="assets/images/product/fashion/product-32.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="single-product-8.html">
                                                    <i class="far fa-shopping-cart"></i> Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product-8.html">Women's Winter Mid Length
                                                Thick Warm Faux Lamb Wool.</a></h5>
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">50</span>
                                        </div>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-eight">
                                <div class="thumbnail">
                                    <a href="single-product-8.html">
                                        <img data-sal="zoom-out" data-sal-delay="250" data-sal-duration="800"
                                            loading="lazy" class="main-img"
                                            src="assets/images/product/fashion/product-33.png" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="single-product-8.html">
                                                    <i class="far fa-shopping-cart"></i> Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product-8.html">Ion8 One Touch Sport / Bike
                                                Water Bottle - Leakproof</a></h5>
                                        <div class="product-rating">
                                            <span class="icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="rating-number">652</span>
                                        </div>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Expolre Product Area  -->
       
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
                                <div class="col-md-6 col-12">
                                    <div class="axil-product product-style-eight product-list-style-3">
                                        <div class="thumbnail">
                                            <a href="single-product-8.html">
                                                <img class="main-img" src="assets/images/product/fashion/product-34.png"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-cate"><a href="#">KIDS’ DOLLS</a></div>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-05"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="title"><a href="single-product-8.html">Manhattan Toy Wee
                                                        Baby Stella Peach 12" Soft Baby Doll</a></h5>
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">1540</span>
                                                </div>
                                                <div class="product-price-variant">
                                                    <span class="price-text">Price</span>
                                                    <span class="price current-price">$59.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-block label-right">
                                            <div class="product-badget sold-out">SOLD OUT</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="axil-product product-style-eight product-list-style-3">
                                        <div class="thumbnail">
                                            <a href="single-product-8.html">
                                                <img class="main-img" src="assets/images/product/fashion/product-35.png"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-cate"><a href="#">KIDS’ DOLLS</a></div>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-05"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="title"><a href="single-product-8.html">Business Women Suit
                                                        Set 3 Pieces Notch Lapel Single Breasted Vest </a></h5>
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">563</span>
                                                </div>
                                                <div class="product-price-variant">
                                                    <span class="price-text">Price</span>
                                                    <span class="price current-price">$99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-block label-right">
                                            <div class="product-badget">TOP SELLING</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="axil-product product-style-eight product-list-style-3">
                                        <div class="thumbnail">
                                            <a href="single-product-8.html">
                                                <img class="main-img" src="assets/images/product/fashion/product-36.png"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-cate"><a href="#">KIDS’ DOLLS</a></div>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-05"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="title"><a href="single-product-8.html">Skechers Men's Energy
                                                        Afterburn Lace-Up Sneaker</a></h5>
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">1,235</span>
                                                </div>
                                                <div class="product-price-variant">
                                                    <span class="price-text">Price</span>
                                                    <span class="price current-price">$70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% OFF</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="axil-product product-style-eight product-list-style-3">
                                        <div class="thumbnail">
                                            <a href="single-product-8.html">
                                                <img class="main-img" src="assets/images/product/fashion/product-37.png"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-cate"><a href="#">KIDS’ DOLLS</a></div>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-05"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="title"><a href="single-product-8.html">Men’s Suit Separates
                                                        with Performance Stretch Fabric</a></h5>
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">226</span>
                                                </div>
                                                <div class="product-price-variant">
                                                    <span class="price-text">Price</span>
                                                    <span class="price current-price">$159.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-block label-right">
                                            <div class="product-badget sale">SALE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-single-layout">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="axil-product product-style-eight product-list-style-3">
                                        <div class="thumbnail">
                                            <a href="single-product-8.html">
                                                <img class="main-img" src="assets/images/product/fashion/product-34.png"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-cate"><a href="#">KIDS’ DOLLS</a></div>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-05"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="title"><a href="single-product-8.html">Manhattan Toy Wee
                                                        Baby Stella Peach 12" Soft Baby Doll</a></h5>
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">1540</span>
                                                </div>
                                                <div class="product-price-variant">
                                                    <span class="price-text">Price</span>
                                                    <span class="price current-price">$59.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-block label-right">
                                            <div class="product-badget sold-out">SOLD OUT</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="axil-product product-style-eight product-list-style-3">
                                        <div class="thumbnail">
                                            <a href="single-product-8.html">
                                                <img class="main-img" src="assets/images/product/fashion/product-35.png"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-cate"><a href="#">KIDS’ DOLLS</a></div>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-05"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="title"><a href="single-product-8.html">Business Women Suit
                                                        Set 3 Pieces Notch Lapel Single Breasted Vest </a></h5>
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">563</span>
                                                </div>
                                                <div class="product-price-variant">
                                                    <span class="price-text">Price</span>
                                                    <span class="price current-price">$99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-block label-right">
                                            <div class="product-badget">TOP SELLING</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="axil-product product-style-eight product-list-style-3">
                                        <div class="thumbnail">
                                            <a href="single-product-8.html">
                                                <img class="main-img" src="assets/images/product/fashion/product-36.png"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-cate"><a href="#">KIDS’ DOLLS</a></div>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-05"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="title"><a href="single-product-8.html">Skechers Men's Energy
                                                        Afterburn Lace-Up Sneaker</a></h5>
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">1,235</span>
                                                </div>
                                                <div class="product-price-variant">
                                                    <span class="price-text">Price</span>
                                                    <span class="price current-price">$70.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% OFF</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="axil-product product-style-eight product-list-style-3">
                                        <div class="thumbnail">
                                            <a href="single-product-8.html">
                                                <img class="main-img" src="assets/images/product/fashion/product-37.png"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-cate"><a href="#">KIDS’ DOLLS</a></div>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-04"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-05"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="title"><a href="single-product-8.html">Men’s Suit Separates
                                                        with Performance Stretch Fabric</a></h5>
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">226</span>
                                                </div>
                                                <div class="product-price-variant">
                                                    <span class="price-text">Price</span>
                                                    <span class="price current-price">$159.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-block label-right">
                                            <div class="product-badget sale">SALE</div>
                                        </div>
                                    </div>
                                </div>
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
                    <span class="title-highlighter highlighter-secondary"> <i class="fal fa-quote-left"></i>Témognages</span>
                    <h2 class="title">Les retours de nos clients</h2>
                </div>
                <!-- End .section-title -->
                <div class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/testimonial/image-1.png" alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/testimonial/image-2.png" alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/testimonial/image-3.png" alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="./assets/images/testimonial/image-2.png" alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->

                </div>
            </div>
        </div>
        <!-- End Testimonila Area  -->
        </main>



    </main>


@endsection
