@include('sweetalert::alert')
@php
$config = DB::table('configs')->first();
$service = DB::table('services')->get();
$produit = DB::table('produits')->get();
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>KONICA</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::url($config->icon) }}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/sal.css">
    <link rel="stylesheet" href="/assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/vendor/base.css">
    <link rel="stylesheet" href="/assets/css/style.min.css">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/Script.js"></script>
    @yield('header')
</head>




<body>

    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    <header class="header axil-header header-style-2">
        <div class="header-top-campaign">
            <div class="container position-relative">
                <div class="campaign-content">
                    <div class="campaign-countdown"></div>
                    <p>Open Doors To A World Of Fashion Get <a href="#">Get Your Offer</a></p>
                </div>
            </div>
            <button class="remove-campaign"><i class="fal fa-times"></i></button>
        </div>
        <!-- Start Header Top Area  -->
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-sm-3 col-5">
                        <div class="header-brand">
                            <a href="{{ route('home') }}" class="logo logo-dark">
                                <img src="{{ Storage::url($config->logo) }}" width="50" height="50" alt="Site Logo">
                            </a>
                            <a href="{{ route('home') }}" class="logo logo-light">
                                <img src="{{ Storage::url($config->logo) }}"   width="50" height="50" alt="Site Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-9 col-7">
                        <div class="header-top-dropdown dropdown-box-style">
                            <div class="axil-search">
                                <button type="submit" class="icon wooc-btn-search">
                                    <i class="far fa-search"></i>
                                </button>
                                <input type="search" class="placeholder product-search-input" name="search2" id="search2" value="" maxlength="128" placeholder="What are you looking for...." autocomplete="off">
                            </div>
                            <div class="dropdown">
                               
                            </div>
                            <div class="dropdown">
                                {{-- <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    EN
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">EN</a></li>
                                    <li><a class="dropdown-item" href="#">ARB</a></li>
                                    <li><a class="dropdown-item" href="#">SPN</a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area  -->

        <!-- Start Mainmenu Area  -->
        <div class="axil-mainmenu aside-category-menu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-nav-department">
                        <aside class="header-department">
                            <button class="header-department-text department-title">
                                <span class="icon"><i class="fal fa-bars"></i></span>
                                <span class="text">Categories</span>
                            </button>
                            <nav class="department-nav-menu">
                                <button class="sidebar-close"><i class="fas fa-times"></i></button>
                                <ul class="nav-menu-list">
                                    <li>
                                        <a href="#" class="nav-link has-megamenu">
                                            <span class="menu-icon"><img src="./assets/images/product/categories/cat-01.png" alt="Department"></span>
                                            <span class="menu-text">Fashion</span>
                                        </a>
                                        <div class="department-megamenu">
                                            <div class="department-megamenu-wrap">
                                                <div class="department-submenu-wrap">
                                                    <div class="department-submenu">
                                                        <h3 class="submenu-heading">Men</h3>
                                                        <ul>
                                                            <li><a href="shop.html">T-shirts</a></li>
                                                            <li><a href="shop-sidebar.html">Shirts</a></li>
                                                            <li><a href="shop.html">Jeans</a></li>
                                                        </ul>
                                                        <h3 class="submenu-heading">Baby</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Baby Cloths</a></li>
                                                            <li><a href="shop-sidebar.html">Baby Gear</a></li>
                                                            <li><a href="shop.html">Baby Toddler</a></li>
                                                            <li><a href="shop-sidebar.html">Baby Toys</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="department-submenu">
                                                        <h3 class="submenu-heading">Women</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Jeans</a></li>
                                                            <li><a href="shop-sidebar.html">T-shirts</a></li>
                                                            <li><a href="shop.html">Shirts</a></li>
                                                            <li><a href="shop.html">Tops</a></li>
                                                            <li><a href="shop-sidebar.html">Jumpsuits</a></li>
                                                            <li><a href="shop.html">Coats</a></li>
                                                            <li><a href="shop-sidebar.html">Sweater</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="department-submenu">
                                                        <h3 class="submenu-heading">Accessories</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Handbag</a></li>
                                                            <li><a href="shop.html">Shoes</a></li>
                                                            <li><a href="shop.html">Wallets</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="featured-product">
                                                    <h3 class="featured-heading">Featured</h3>
                                                    <div class="product-list">
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature1.png" alt="Featured Product"></a>
                                                        </div>
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature2.png" alt="Featured Product"></a>
                                                        </div>
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature3.png" alt="Featured Product"></a>
                                                        </div>
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature4.png" alt="Featured Product"></a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="axil-btn btn-bg-primary">See All Offers</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link has-megamenu">
                                            <span class="menu-icon"><img src="./assets/images/product/categories/cat-02.png" alt="Department"></span>
                                            <span class="menu-text">Electronics</span>
                                        </a>
                                        <div class="department-megamenu">
                                            <div class="department-megamenu-wrap">
                                                <div class="department-submenu-wrap">
                                                    <div class="department-submenu">
                                                        <h3 class="submenu-heading">Men</h3>
                                                        <ul>
                                                            <li><a href="shop.html">T-shirts</a></li>
                                                            <li><a href="shop-sidebar.html">Shirts</a></li>
                                                            <li><a href="shop.html">Jeans</a></li>
                                                        </ul>
                                                        <h3 class="submenu-heading">Baby</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Baby Cloths</a></li>
                                                            <li><a href="shop-sidebar.html">Baby Gear</a></li>
                                                            <li><a href="shop.html">Baby Toddler</a></li>
                                                            <li><a href="shop-sidebar.html">Baby Toys</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="department-submenu">
                                                        <h3 class="submenu-heading">Women</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Jeans</a></li>
                                                            <li><a href="shop-sidebar.html">T-shirts</a></li>
                                                            <li><a href="shop.html">Shirts</a></li>
                                                            <li><a href="shop.html">Tops</a></li>
                                                            <li><a href="shop-sidebar.html">Jumpsuits</a></li>
                                                            <li><a href="shop.html">Coats</a></li>
                                                            <li><a href="shop-sidebar.html">Sweater</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="department-submenu">
                                                        <h3 class="submenu-heading">Accessories</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Handbag</a></li>
                                                            <li><a href="shop.html">Shoes</a></li>
                                                            <li><a href="shop.html">Wallets</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="featured-product">
                                                    <h3 class="featured-heading">Featured</h3>
                                                    <div class="product-list">
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature1.png" alt="Featured Product"></a>
                                                        </div>
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature2.png" alt="Featured Product"></a>
                                                        </div>
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature3.png" alt="Featured Product"></a>
                                                        </div>
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature4.png" alt="Featured Product"></a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="axil-btn btn-bg-primary">See All Offers</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link has-megamenu">
                                            <span class="menu-icon"><img src="./assets/images/product/categories/cat-03.png" alt="Department"></span>
                                            <span class="menu-text">Home Decor</span>
                                        </a>
                                        <div class="department-megamenu">
                                            <div class="department-megamenu-wrap">
                                                <div class="department-submenu-wrap">
                                                    <div class="department-submenu">
                                                        <h3 class="submenu-heading">Men</h3>
                                                        <ul>
                                                            <li><a href="shop.html">T-shirts</a></li>
                                                            <li><a href="shop-sidebar.html">Shirts</a></li>
                                                            <li><a href="shop.html">Jeans</a></li>
                                                        </ul>
                                                        <h3 class="submenu-heading">Baby</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Baby Cloths</a></li>
                                                            <li><a href="shop-sidebar.html">Baby Gear</a></li>
                                                            <li><a href="shop.html">Baby Toddler</a></li>
                                                            <li><a href="shop-sidebar.html">Baby Toys</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="department-submenu">
                                                        <h3 class="submenu-heading">Women</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Jeans</a></li>
                                                            <li><a href="shop-sidebar.html">T-shirts</a></li>
                                                            <li><a href="shop.html">Shirts</a></li>
                                                            <li><a href="shop.html">Tops</a></li>
                                                            <li><a href="shop-sidebar.html">Jumpsuits</a></li>
                                                            <li><a href="shop.html">Coats</a></li>
                                                            <li><a href="shop-sidebar.html">Sweater</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="department-submenu">
                                                        <h3 class="submenu-heading">Accessories</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Handbag</a></li>
                                                            <li><a href="shop.html">Shoes</a></li>
                                                            <li><a href="shop.html">Wallets</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="featured-product">
                                                    <h3 class="featured-heading">Featured</h3>
                                                    <div class="product-list">
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature1.png" alt="Featured Product"></a>
                                                        </div>
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature2.png" alt="Featured Product"></a>
                                                        </div>
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature3.png" alt="Featured Product"></a>
                                                        </div>
                                                        <div class="item-product">
                                                            <a href="#"><img src="./assets/images/product/product-feature4.png" alt="Featured Product"></a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="axil-btn btn-bg-primary">See All Offers</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link">
                                            <span class="menu-icon"><img src="./assets/images/product/categories/cat-04.png" alt="Department"></span>
                                            <span class="menu-text">Medicine</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link">
                                            <span class="menu-icon"><img src="./assets/images/product/categories/cat-05.png" alt="Department"></span>
                                            <span class="menu-text">Furniture</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link">
                                            <span class="menu-icon"><img src="./assets/images/product/categories/cat-06.png" alt="Department"></span>
                                            <span class="menu-text">Crafts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link">
                                            <span class="menu-icon"><img src="./assets/images/product/categories/cat-07.png" alt="Department"></span>
                                            <span class="menu-text">Accessories</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link">
                                            <span class="menu-icon"><img src="./assets/images/product/categories/cat-08.png" alt="Department"></span>
                                            <span class="menu-text">Camera</span>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </aside>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="{{ route('home') }}" class="logo">
                                    <img src="{{ Storage::url($config->logo) }}" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li class="menu-item">
                                    <a href="{{ route('home') }}">Accueil</a>

                                </li>
                              

                                <li class="menu-item">
                                    <a href="{{ route('shop') }}">Produits</a>
                                </li>


                                <li><a href="{{ route('contact') }}">Contact</a></li>

                                @guest

                                  <li class="current">
                                     <a href="{{ route('register') }}">Inscription</a>
                                 </li>
             
                                 <li>
                                     <a href="{{ url('login') }}">Connexion</a>
                                 </li> 
                                 @else
                                 @if (auth()->user()->role != 'client')
                                 <li><a href="{{ url('dashboard') }}">Dashboard</a>
                                 </li>
                                 @endif


                                 @endguest

                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                        <ul class="action-list">
                            <li class="axil-search d-sm-none d-block">
                                <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="wishlist.html">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </li>
                            <li class="shopping-cart">
                                <a href="#" class="cart-dropdown-btn">
                                    <span class="cart-count">3</span>
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li class="my-account">
                                <a href="javascript:void(0)">
                                    <i class="flaticon-person"></i>
                                </a>
                                <div class="my-account-dropdown">
                                    @if (Auth()->user())
                                    <ul>
                                        <li>
                                            <a href="#">Mon compte</a>
                                        </li>
                                        <li>
                                            <a href="#">Mes favoris</a>
                                        </li>
                                        <li>
                                            <a href="#">Mon panier</a>
                                        </li>
                                        <li>

                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();">
                                                Déconnexion
                                            </a>
                            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>

                                      
                        
                                     
                                    </ul>
                                    @else
                                    <div class="login-btn">
                                        <a href="{{ url('login') }}" class="axil-btn btn-bg-primary">Connexion</a>
                                    </div>
                                   
                                    <div class="reg-footer text-center">Pas de compte? <a href="{{ url('register') }}" class="btn-link">S'inscrire ici.</a></div>
                               @endif
                                </div>
                            </li>
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area  -->
    </header>




    <main>



        @yield('body')




    </main>
    <!-- Start Footer Area  -->
    <footer class="axil-footer-area footer-style-2">
        <!-- Start Footer Top Area  -->
        <div class="footer-top separator-top">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                             <div class="logo mb--30">
                            <a href="index.html">
                                <img class="light-logo"  src="{{ Storage::url($config->logofooter) }}" alt="Logo" height="200"
                                width="200">
                            </a>
                        </div> 
                          
                        <p style="font-size: 18px; line-height: 1.6; text-align: justify;">
                            {!! $config->description !!}
                        </p>
                        
                            
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Mon compte</h5>
                            <div class="inner">
                                <ul>
                                    @if (Auth()->user())
                                <li><a href="{{ route('profile') }}">Me paramètres</a></li>
                                <li><a href="{{ route('favories') }}">Mes favoris</a></li>
                                <li><a href="{{ route('cart') }}">Mon panier</a></li>
                          
                                
                                @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Nos pages</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="{{ route('home') }}">Accueill</a></li>
                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Contact info</h5>
                            <div class="inner">
                                {{-- <span>Save $3 With App & New User only</span> --}}
                                <div class="download-btn-group">
                                 
                                    <div class="inner">
                                        
                                        <ul class="support-list-item">
                                            <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i> {{ $config->email ?? ' ' }}</a></li>
                                            <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i>{{ $config->telephone  ?? ' '}}</a></li>
                                             <li><i class="fal fa-map-marker-alt"></i>{{ $config->addresse ?? ' ' }}</li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                       {{--  <div class="social-share">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-discord"></i></a>
                        </div> --}}
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li>©{{ date('Y') }}  KONICA | Design By<a href="https://www.e-build.tn" style="color: #c71f17;">
                                    <b> E-build </b>
                                </a>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            {{-- <span class="card-text">Accept For</span>
                            <ul class="payment-icons-bottom quick-link">
                                <li><img src="assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                                <li><img src="assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                                <li><img src="assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer Area  -->

    <!-- Product Quick View Modal Start -->
    <div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
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
                            </div>
                            <div class="col-lg-5 mb--40">
                                <div class="single-product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <div class="star-rating">
                                                <img src="assets/images/icons/rate.png" alt="Rate Images">
                                            </div>
                                            <div class="review-link">
                                                <a href="#">(<span>1</span> customer reviews)</a>
                                            </div>
                                        </div>
                                        <h3 class="product-title">Serif Coffee Table</h3>
                                        <span class="price-amount">$155.00 - $255.00</span>
                                        <ul class="product-meta">
                                            <li><i class="fal fa-check"></i>In stock</li>
                                            <li><i class="fal fa-check"></i>Free delivery available</li>
                                            <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                        </ul>
                                        <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

                                        <div class="product-variations-wrapper">

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Colors:</h6>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant mt--0">
                                                        <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Product Variation  -->

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Size:</h6>
                                                <ul class="range-variant">
                                                    <li>xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <!-- End Product Variation  -->

                                        </div>

                                        <!-- Start Product Action Wrapper  -->
                                        <div class="product-action-wrapper d-flex-center">
                                            <!-- Start Quentity Action  -->
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul class="product-action d-flex-center mb--0">
                                                <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
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
    <!-- Product Quick View Modal End -->

    <!-- Header Search Modal End -->
    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Write Something....">
                        <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="search-result-header">
                    <h6 class="title">24 Result Found</h6>
                    <a href="shop.html" class="view-all">View All</a>
                </div>
                <div class="psearch-results">
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="./assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="axil-product-list">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img src="./assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <span class="rating-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </span>
                                <span class="rating-number"><span>100+</span> Reviews</span>
                            </div>
                            <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-cart">
                                <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Search Modal End -->



    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product.html"><img src="assets/images/product/electric/product-01.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-3.html">Wireless PS Handler</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>155.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-2.html"><img src="assets/images/product/electric/product-02.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="rating-number">(4)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product-2.html">Gradient Light Keyboard</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>255.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="5">
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="single-product-3.html"><img src="assets/images/product/electric/product-03.png" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="rating-number">(6)</span>
                            </div>
                            <h3 class="item-title"><a href="single-product.html">HD CC Camera</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>200.00</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="100">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">$610.00</span>
                </h3>
                <div class="group-btn">
                    <a href="cart.html" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="checkout.html" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="/assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="/assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="/assets/js/vendor/popper.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/assets/js/vendor/slick.min.js"></script>
    <script src="/assets/js/vendor/js.cookie.js"></script>
    <!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="/assets/js/vendor/jquery-ui.min.js"></script>
    <script src="/assets/js/vendor/jquery.ui.touch-punch.min.js"></script>
    <script src="/assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="/assets/js/vendor/sal.js"></script>
    <script src="/assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="/assets/js/vendor/counterup.js"></script>
    <script src="/assets/js/vendor/waypoints.min.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

</body>

</html>