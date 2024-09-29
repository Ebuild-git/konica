@extends('front.fixe')
@section('titre', 'Shop')
@section('body')


    <main>


<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>

    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Boutique</li>
                            </ul>
                            <h1 class="title">Explorez tous les produits</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="assets/images/product/product-45.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start Shop Area  -->
        <div class="axil-shop-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="axil-shop-sidebar">
                            <div class="d-lg-none">
                                <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="toggle-list product-categories active">
                                <h6 class="title">CATEGORIES</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        <li class="current-cat"><a href="/shop">Tous les produits</a></li>
                                        
                                        @foreach ($categories as $category)
                                            <li><a href="/category/{{ $category->id }}"
                                                    class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}">
                                                    {{ Str::limit($category->nom, 25) }}<span>({{ $category->produits->count() }})</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="toggle-list product-categories product-gender active">
                                <h6 class="title">GENDER</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        <li class="chosen"><a href="#">Men (40)</a></li>
                                        <li><a href="#">Women (56)</a></li>
                                        <li><a href="#">Unisex (18)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="toggle-list product-color active">
                                <h6 class="title">COLORS</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        <li class="chosen"><a href="#" class="color-extra-01"></a></li>
                                        <li><a href="#" class="color-extra-02"></a></li>
                                        <li><a href="#" class="color-extra-03"></a></li>
                                        <li><a href="#" class="color-extra-04"></a></li>
                                        <li><a href="#" class="color-extra-05"></a></li>
                                        <li><a href="#" class="color-extra-06"></a></li>
                                        <li><a href="#" class="color-extra-07"></a></li>
                                        <li><a href="#" class="color-extra-08"></a></li>
                                        <li><a href="#" class="color-extra-09"></a></li>
                                        <li><a href="#" class="color-extra-10"></a></li>
                                        <li><a href="#" class="color-extra-11"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="toggle-list product-size active">
                                <h6 class="title">SIZE</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        <li class="chosen"><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                        <li><a href="#">3XL</a></li>
                                        <li><a href="#">4XL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="toggle-list product-price-range active">
                                <h6 class="title">PRICE</h6>
                                <div class="shop-submenu">
                                    <ul>
                                        <li class="chosen"><a href="#">30</a></li>
                                        <li><a href="#">5000</a></li>
                                    </ul>
                                    <form action="#" class="mt--25">
                                        <div id="slider-range"></div>
                                        <div class="flex-center mt--20">
                                            <span class="input-range">Price: </span>
                                            <input type="text" id="amount" class="amount-range" readonly>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <button class="axil-btn btn-bg-primary">All Reset</button>
                        </div>
                        <!-- End .axil-shop-sidebar -->
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="axil-shop-top mb--40">
                                    <div class="category-select align-items-center justify-content-lg-end justify-content-between">
                                        <!-- Start Single Select  -->
                                        <span class="filter-results">Filtrez</span>
                                        <select class="single-select" name="sort_by" id="sort_by"
                                        onchange="window.location.href=this.value;">
                                           
                                    <option value="{{ url('shop') }}">Default</option>
                                    <option value="{{ url('croissant') }}">Croissant</option>

                                    <option value="{{ url('decroissant') }}">Décroissant</option>
                                        </select>
                                        <!-- End Single Select  -->
                                    </div>
                                    <div class="d-lg-none">
                                        <button class="product-filter-mobile filter-toggle"><i class="fas fa-filter"></i> FILTER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .row -->
                        <div class="row row--15">
                            @if ($produits)

                                @foreach ($produits as $key => $produit)
                            <div class="col-xl-4 col-sm-6">
                                <div class="axil-product product-style-one mb--30">
                                    <div class="thumbnail">
                                        <a  href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                            <img src="{{ Storage::url($produit->photo) }}" alt="{{ $produit->nom }}" style="max-width: 300px; max-height: 300px;">

                                        </a>
                                        <style>
                                                          
                                            .top-left {
                                                position: absolute;
                                                top: 8px;
                                                right: 18px;
                                                color: red;
                                            }

                                      
                                        
                                        
                        </style>
                                        @if ($produit->inPromotion())
                                        <div class="top-left"  style="background-color: rgb(237, 16, 16);color: white;">
                                            <div class="product-badget">-{{$produit->inPromotion()->pourcentage}}%</div>
                                        </div>
                                        @endif
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                @if (Auth()->user())
                                                <li class="wishlist"><a
                                                        onclick="AddFavoris({{ $produit->id }})"><i
                                                            class="far fa-heart"></i></a></li>
                                            @endif
                                                <li class="select-option"><a onclick="AddToCart( {{ $produit->id }} )">Ajouter au panier</a></li>
                                               {{--  <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#{{ $produit->id }}"><i class="far fa-eye"></i></a></li>
                                         --}}    </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a   href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ Str::limit($produit->nom, 15) }}</a></h5>
                                          {{--   <div class="product-price-variant">
                                                <span class="price current-price">$30</span>
                                                <span class="price old-price">$30</span>
                                            </div> --}}
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
                                                           
    
    
                                                               {{--  <span style="font-size: 1.2rem; color: #dc3545; font-weight: bold;">
                                                                    {{ $produit->prix }} DT
                                                                </span> --}}
                                                                <span class="price old-price" style="position: relative; font-size: 1.2rem; color: #dc3545; font-weight: bold;">
                                                                    {{ $produit->prix }} DT
                                                                    <span style="position: absolute; top: 50%; left: 0; width: 100%; height: 2px; background-color: black;"></span>
                                                                </span>
    
                                                           
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
                            @endforeach
                            @endif
                     
                            <!-- End Single Product  -->
                        </div>
                        <div class="text-center pt--20">
                            <ul class="pagination-list">
                                {{ $produits->links('pagination::bootstrap-4') }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Shop Area  -->

        <!-- End Axil Newsletter Area  -->
    </main>


    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service1.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service2.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service3.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="./assets/images/icons/service4.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
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
                                               data-scale="1.4"
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

                               



                                </div>
                                {{--  <div class="col-lg-7 mb--40">
                    <div class="row">
                        <div class="col-lg-10 order-lg-2">
                            <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                <div class="thumbnail">
                                    <img src="assets/images/product/product-big-01.png" alt="Product Images">
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% OFF</div>
                                    </div>
                                    <div class="product-quick-view position-view">
                                        <a href="assets/images/product/product-big-01.png" class="popup-zoom">
                                            <i class="far fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="thumbnail">
                                    <img src="assets/images/product/product-big-02.png" alt="Product Images">
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% OFF</div>
                                    </div>
                                    <div class="product-quick-view position-view">
                                        <a href="assets/images/product/product-big-02.png" class="popup-zoom">
                                            <i class="far fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="thumbnail">
                                    <img src="assets/images/product/product-big-03.png" alt="Product Images">
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% OFF</div>
                                    </div>
                                    <div class="product-quick-view position-view">
                                        <a href="assets/images/product/product-big-03.png" class="popup-zoom">
                                            <i class="far fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 order-lg-1">
                            <div class="product-small-thumb small-thumb-wrapper">
                                <div class="small-thumb-img">
                                    <img src="assets/images/product/product-thumb/thumb-08.png" alt="thumb image">
                                </div>
                                <div class="small-thumb-img">
                                    <img src="assets/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                </div>
                                <div class="small-thumb-img">
                                    <img src="assets/images/product/product-thumb/thumb-09.png" alt="thumb image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                                                        style="position: relative; font-size: 1.2rem; color: #dc3545; font-weight: bold;">
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
                                                    <label class="badge bg-success"> Stock disponible</label>
                                                @else
                                                    <label class="badge bg-danger"> Stock non
                                                        disponible</label>
                                                @endif

                                                <li>Categorie:<span>
                                                        {{ Str::limit($produit->categories->nom, 30) }}</span>
                                                </li>
                                                <li> <span>Reference:</span> {{ $produit->reference }}</li>
                                            </ul>
                                            <p class="description">In ornare lorem ut est dapibus, ut tincidunt
                                                nisi pretium. Integer ante est, elementum eget magna.
                                                Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

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
                                                            class="axil-btn btn-bg-primary">Ajouter au
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
    <!-- Product Quick View Modal End -->



</main>
@endsection
