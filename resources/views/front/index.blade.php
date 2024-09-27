 @extends('front.fixe')
 @section('titre', 'Accueil')
 @section('body')
     <main>
         @php
             $config = DB::table('configs')->first();
             $service = DB::table('services')->get();
             $produit = DB::table('produits')->get();
         @endphp
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
         <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>



         <!-- Start Banner section -->
         <div class="banner-section">
             <div class="container-fluid p-0">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="swiper banner1-slider">
                             <div class="swiper-wrapper">
                                 @foreach ($banners as $banner)
                                     <div class="swiper-slide">
                                         <div class="banner-wrapper">
                                             <div class="banner-left">
                                                 <img src="assets/img/home1/icon/banner-vector1.svg" alt=""
                                                     class="banner-vector1">
                                                 <img src="assets/img/home1/icon/banner-vector2.svg" alt=""
                                                     class="banner-vector2">
                                                 <img src="assets/img/home1/icon/banner-vector3.svg" alt=""
                                                     class="banner-vector3">
                                                 <div class="banner-content">

                                                     <h1> {{ $banner->titre ?? '' }}</h1>
                                                     <p> {{ $banner->sous_titre ?? '' }}</p>
                                                     <a href="{{ route('shop') }}" class="primary-btn1 hover-btn3">*Shop*
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="banner-right-wrapper">
                                                 <div class="banner-right-img">
                                                     <img src="{{ Storage::url($banner->image) }}" width="400"
                                                         height="400" alt="" class="banner-right-bg">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach



                             </div>
                             <div class="swiper-pagination1"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>



         <!-- Star Category section -->
         <div class="category-section mt-110 mb-110">
             <div class="container">
                 <div class="category-section-title mb-70">

                     <h1> categories</h1>
                 </div>

                 <div class="row g-4 mb-60">
                     @foreach ($categories as $key => $category)
                         <div class="col-lg-3 col-sm-6">
                             <div class="category-card">
                                 <div class="category-card-img hover-img">
                                     <a href="/shop?id_categorie={{ $category->id }}" class="small"
                                         class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}"><img
                                             src="{{ Storage::url($category->photo) }}" alt=""></a>
                                 </div>
                                 <div class="category-card-content">
                                     <a href="/shop?id_categorie={{ $category->id }}" class="small"
                                         class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}">{{ $category->nom }}</a>

                                 </div>
                             </div>
                         </div>
                     @endforeach

                 </div>


             </div>
         </div>

         <!-- product view modal  -->

         <!-- End Best Selling section section -->




         <section class="prodact-area product-bg">
            <div class="rr-fea-product__area p-relative fix grey-bg-2 pb-35 pt-115 rr-pro-tab1 rr-el-section">
                <div class="container custom-container-3">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="prodact-title-wrapper text-center mb-25">
                        <span class="subtitle rr-el-subtitle">Nos produits</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="rr-fea-product__tab mb-25">

                                <nav>
                                    <div class="nav nav-tab justify-content-center" id="nav-tab" role="tablist">
                                    
                                        @if ($categories)
                                            <button class="nav-link rr-el-rep-filterBtn active" id="nav-0-tab"
                                                data-filter="*" data-bs-toggle="tab" data-bs-target="#nav-0"
                                                type="button" role="tab" aria-controls="nav-0"
                                                aria-selected="true"><h6 class="product-price--main">
                                                    Tout</h6></button>
                                            @foreach ($categories as $key => $category)
                                                <button class="nav-link rr-el-rep-filterBtn"
                                                    id="nav-{{ $key + 1 }}-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-{{ $key + 1 }}" type="button"
                                                    role="tab" aria-controls="nav-{{ $key + 1 }}"
                                                    data-filter=".category-{{ $category->id }}"
                                                    aria-selected="false"><h6 class="product-price--main">{{ $category->nom }}</h6></button>
                                            @endforeach
                                        @endif

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

    


                    <div class="row">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-0" role="tabpanel"
                                aria-labelledby="nav-0-tab">
                                @php
                                    $products = DB::table('produits')->get();
                                @endphp


                                <div class="row product-container">
                                    @foreach ($produits as $produit)
                                        @if ($produit)
                                        <div class="col-xl-4 col-md-6">
                                            <div class="product-card style-2 hover-btn">
                                                <div class="product-card-img double-img">
                                                   <a  href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                                    <img src="{{ Storage::url($produit->photo) }}" alt="" class="img1">
                                                    <img src="{{ Storage::url($produit->photo) }}" alt="" class="img2">
                                                    {{-- <div class="batch">
                                                        <span>-15%</span>
                                                    </div> --}}

                                                    <style>
                                                          
                                                        .top-left {
                                                            position: absolute;
                                                            top: 8px;
                                                            left: 16px;
                                                            color: red;
                                                        }

                                                  
                                                    
                                                    
                                    </style>
                               
                                    <div class="top-left"  style="background-color: rgb(16, 15, 15);color: white;">
                                        <span>@if ($produit->inPromotion())
                                            <span>
                                                -{{ $produit->inPromotion()->pourcentage }}%</span>
                                        @endif</span>
                                    </div>
                                                   </a>
                                                   <div class="overlay">
                                                       <div class="cart-area">

                                                        <a   onclick="AddToCart( {{ $produit->id }} )" class="hover-btn3 add-cart-btn"><i
                                                            class="bi bi-bag-check"></i> Ajouter au panier</a>   </div>
                                                   </div>
                                                   <div class="view-and-favorite-area">
                                                    <ul>
                                                        <li>
                                                            @if (Auth()->user())
                                                            <a   onclick="AddFavoris({{ $produit->id }})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 18 18">
                                                                    <g clip-path="url(#clip0_168_378)">
                                                                        <path
                                                                            d="M16.528 2.20919C16.0674 1.71411 15.5099 1.31906 14.8902 1.04859C14.2704 0.778112 13.6017 0.637996 12.9255 0.636946C12.2487 0.637725 11.5794 0.777639 10.959 1.048C10.3386 1.31835 9.78042 1.71338 9.31911 2.20854L9.00132 2.54436L8.68352 2.20854C6.83326 0.217151 3.71893 0.102789 1.72758 1.95306C1.63932 2.03507 1.5541 2.12029 1.47209 2.20854C-0.490696 4.32565 -0.490696 7.59753 1.47209 9.71463L8.5343 17.1622C8.77862 17.4201 9.18579 17.4312 9.44373 17.1868C9.45217 17.1788 9.46039 17.1706 9.46838 17.1622L16.528 9.71463C18.4907 7.59776 18.4907 4.32606 16.528 2.20919ZM15.5971 8.82879H15.5965L9.00132 15.7849L2.40553 8.82879C0.90608 7.21113 0.90608 4.7114 2.40553 3.09374C3.76722 1.61789 6.06755 1.52535 7.5434 2.88703C7.61505 2.95314 7.68401 3.0221 7.75012 3.09374L8.5343 3.92104C8.79272 4.17781 9.20995 4.17781 9.46838 3.92104L10.2526 3.09438C11.6142 1.61853 13.9146 1.52599 15.3904 2.88767C15.4621 2.95378 15.531 3.02274 15.5971 3.09438C17.1096 4.71461 17.1207 7.2189 15.5971 8.82879Z" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                            @endif
                                                        </li>
                                                   
                                                    </ul>
                                                </div>
                                                   
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a   href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ Str::limit($produit->nom, 15) }}</a></p>
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
                                        @endif
                                    @endforeach

                                </div>

                            </div>
                            @foreach ($categories as $key => $category)
                                <div class="tab-pane fade" id="nav-{{ $key + 1 }}" role="tabpanel"
                                    aria-labelledby="nav-{{ $key + 1 }}-tab">
                                    @php
                                     
                                        $categoryProducts = DB::table('produits')
                                            ->select('*')
                                            ->latest()
                                            ->take(16)
                                            ->where('category_id', $category->id)
                                      
                                            ->get();
                                    @endphp 
                                    <div class="row product-container">
                                        @foreach ($categoryProducts as $produit)

                                        <div class="col-xl-4 col-md-6">
                                            <div class="product-card style-2 hover-btn">
                                                <div class="product-card-img double-img">
                                                   <a  href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
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
                               
                                    <div class="top-left"  style="background-color: rgb(16, 15, 15);color: white;">
                                        @if ($produit->id_promotion)
                                        @php
                                            // Rechercher la promotion associée au produit (si vous avez le modèle Promotion)
                                            $promotion = \App\Models\promotions::find($produit->id_promotion);
                                        @endphp
                                
                                        @if ($promotion)
                                            <span>-{{ $promotion->pourcentage }}%</span>
                                        @endif
                                    @endif
                                    </div>
                                                   </a>
                                                   <div class="overlay">
                                                       <div class="cart-area">
                                                        <a   onclick="AddToCart( {{ $produit->id }} )" class="hover-btn3 add-cart-btn"><i
                                                            class="bi bi-bag-check"></i> Ajouter au panier</a>  </div>
                                                   </div>

                                                   <div class="view-and-favorite-area">
                                                    <ul>
                                                        <li>
                                                            @if (Auth()->user())
                                                            <a   onclick="AddFavoris({{ $produit->id }})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 18 18">
                                                                    <g clip-path="url(#clip0_168_378)">
                                                                        <path
                                                                            d="M16.528 2.20919C16.0674 1.71411 15.5099 1.31906 14.8902 1.04859C14.2704 0.778112 13.6017 0.637996 12.9255 0.636946C12.2487 0.637725 11.5794 0.777639 10.959 1.048C10.3386 1.31835 9.78042 1.71338 9.31911 2.20854L9.00132 2.54436L8.68352 2.20854C6.83326 0.217151 3.71893 0.102789 1.72758 1.95306C1.63932 2.03507 1.5541 2.12029 1.47209 2.20854C-0.490696 4.32565 -0.490696 7.59753 1.47209 9.71463L8.5343 17.1622C8.77862 17.4201 9.18579 17.4312 9.44373 17.1868C9.45217 17.1788 9.46039 17.1706 9.46838 17.1622L16.528 9.71463C18.4907 7.59776 18.4907 4.32606 16.528 2.20919ZM15.5971 8.82879H15.5965L9.00132 15.7849L2.40553 8.82879C0.90608 7.21113 0.90608 4.7114 2.40553 3.09374C3.76722 1.61789 6.06755 1.52535 7.5434 2.88703C7.61505 2.95314 7.68401 3.0221 7.75012 3.09374L8.5343 3.92104C8.79272 4.17781 9.20995 4.17781 9.46838 3.92104L10.2526 3.09438C11.6142 1.61853 13.9146 1.52599 15.3904 2.88767C15.4621 2.95378 15.531 3.02274 15.5971 3.09438C17.1096 4.71461 17.1207 7.2189 15.5971 8.82879Z" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                            @endif
                                                        </li>
                                                   
                                                    </ul>
                                                </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a   href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">{{ Str::limit($produit->nom, 15) }}</a></p>
                                                </div>
                                                <div class="product__price__wrapper">
                                                    <h6 class="product-price--main">
        
                                                        @php
                                                        $prixFinal = $produit->prix;
                                                        if (isset($produit->id_promotion)) {
                                                            $promotion = \App\Models\promotions::find($produit->id_promotion);
                                                            if ($promotion) {
                                                                $prixFinal = $produit->prix - ($produit->prix * $promotion->pourcentage / 100);
                                                            }
                                                        }
                                                    @endphp
                                                    
                                                    @if (isset($produit->id_promotion))
                                                        <div class="row">
                                                            <div class="col-sm-6 col-6">
                                                                <b class="text-success" style="color: #4169E1">
                                                                    {{ $prixFinal }} DT
                                                                </b>
                                                            </div>
                                                            <div class="col-sm-6 col-6 text-end">
                                                                <strike>
                                                                    <span class="text-danger small">
                                                                        {{ $produit->prix }} DT
                                                                    </span>
                                                                </strike>
                                                            </div>
                                                        </div>
                                                    @else
                                                        {{ $produit->prix }} DT
                                                    @endif
                                                    
        
        
                                                    </h6>
                                                </div>
                                               
                                                <span class="for-border"></span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </section>
         <br><br> <br><br>
         <!-- Start Newest Product section section -->
         <div class="newest-product-section mb-110">
             <div class="container">
                 <div class="section-title2 style-2">
                     <h3>Publications récentes</h3>
                     <div class="slider-btn">
                         <div class="prev-btn">
                             <i class="bi bi-arrow-left"></i>
                         </div>
                         <div class="next-btn">
                             <i class="bi bi-arrow-right"></i>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-12">
                         <div class="swiper newest-slider">
                             <div class="swiper-wrapper">
                                 @if ($lastproduits)
                                     @foreach ($lastproduits as $produit)
                                         <div class="swiper-slide">
                                             <div class="product-card hover-btn">
                                                 <div class="product-card-img double-img">
                                                     <a
                                                         href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                                         {{--  <img  src="{{ Storage::url($produit->photo) }}" alt=""
                                                             class="img1"> --}}
                                                         <img src="{{ Storage::url($produit->photo) }}" alt=""
                                                             class="img2">

                                                         <div class="top-left"
                                                             style="background-color: rgb(11, 11, 11);color: white;">
                                                             <span>
                                                                 @if ($produit->inPromotion())
                                                                     <span>
                                                                         -{{ $produit->inPromotion()->pourcentage }}%</span>
                                                                 @endif
                                                             </span>
                                                         </div>
                                                     </a>
                                                     <a
                                                         href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                                         <img src="{{ Storage::url($produit->photo) }}" alt=""
                                                             class="img1">
                                                         {{-- <img src="{{ Storage::url($produit->photo) }}" alt=""
                                                         class="img2"> --}}


                                                         <div class="top-left"
                                                             style="background-color: rgb(11, 11, 11);color: white;">
                                                             <span>
                                                                 @if ($produit->inPromotion())
                                                                     <span>
                                                                         -{{ $produit->inPromotion()->pourcentage }}%</span>
                                                                 @endif
                                                             </span>
                                                         </div>
                                                     </a>
                                                     <div class="overlay">
                                                         <div class="cart-area">
                                                             <a onclick="AddToCart( {{ $produit->id }} )"
                                                                 class="hover-btn3 add-cart-btn"><i
                                                                     class="bi bi-bag-check"></i> Ajouter au panier</a>

                                                         </div>
                                                     </div>
                                                     <div class="view-and-favorite-area">
                                                         <ul>
                                                             <li>
                                                                 @if (Auth()->user())
                                                                     <a onclick="AddFavoris({{ $produit->id }})">
                                                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="18" height="18"
                                                                             viewBox="0 0 18 18">
                                                                             <g clip-path="url(#clip0_168_378)">
                                                                                 <path
                                                                                     d="M16.528 2.20919C16.0674 1.71411 15.5099 1.31906 14.8902 1.04859C14.2704 0.778112 13.6017 0.637996 12.9255 0.636946C12.2487 0.637725 11.5794 0.777639 10.959 1.048C10.3386 1.31835 9.78042 1.71338 9.31911 2.20854L9.00132 2.54436L8.68352 2.20854C6.83326 0.217151 3.71893 0.102789 1.72758 1.95306C1.63932 2.03507 1.5541 2.12029 1.47209 2.20854C-0.490696 4.32565 -0.490696 7.59753 1.47209 9.71463L8.5343 17.1622C8.77862 17.4201 9.18579 17.4312 9.44373 17.1868C9.45217 17.1788 9.46039 17.1706 9.46838 17.1622L16.528 9.71463C18.4907 7.59776 18.4907 4.32606 16.528 2.20919ZM15.5971 8.82879H15.5965L9.00132 15.7849L2.40553 8.82879C0.90608 7.21113 0.90608 4.7114 2.40553 3.09374C3.76722 1.61789 6.06755 1.52535 7.5434 2.88703C7.61505 2.95314 7.68401 3.0221 7.75012 3.09374L8.5343 3.92104C8.79272 4.17781 9.20995 4.17781 9.46838 3.92104L10.2526 3.09438C11.6142 1.61853 13.9146 1.52599 15.3904 2.88767C15.4621 2.95378 15.531 3.02274 15.5971 3.09438C17.1096 4.71461 17.1207 7.2189 15.5971 8.82879Z" />
                                                                             </g>
                                                                         </svg>
                                                                     </a>
                                                                 @endif
                                                             </li>
                                                             <li>

                                                             </li>
                                                         </ul>

                                                     </div>
                                                 </div>
                                                 <div class="product-card-content">
                                                     <p style="color: rgb(6, 6, 6);"><a
                                                             href="{{ route('details-produits', ['id' => $produit->id, 'slug' => Str::slug(Str::limit($produit->nom, 10))]) }}">
                                                             <h6 class="product-price--main">
                                                                 {{ Str::limit($produit->nom, 15) }}</h6>
                                                         </a>
                                                     </p>
                                                 </div>
                                                 <div class="product__price__wrapper ">
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
         <!-- End Newest Product section section -->


         <!-- Start Testimonial section -->
         <div class="testimonial-section mb-110">
             <div class="container">
                 <div class="section-title3">
                     <h3>Les retours de <span> nos clients</span></h3>
                     <div class="slider-btn2">
                         <div class="testimonial-prev-btn">
                             <i class='bx bxs-chevron-left'></i>
                         </div>
                         <div class="testimonial-next-btn">
                             <i class='bx bxs-chevron-right'></i>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="swiper testimonial-slider">
                             <div class="swiper-wrapper">
                                 @if ($testimonials->isEmpty())
                                     <p>Aucun témoignage disponible.</p>
                                 @else
                                     @foreach ($testimonials as $testimonial)
                                         <div class="swiper-slide">
                                             <div class="testimonial-card">
                                                 <div class="testimonial-content">

                                                     <p>“{{ $testimonial->message }}”</p>
                                                 </div>
                                                 <div class="testimonial-bottom">
                                                     <div class="author-area">
                                                         <h5>{{ $testimonial->name }}</h5>

                                                     </div>
                                                     <div class="testimonial-qoute">
                                                         <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                             height="51" viewBox="0 0 74 51">
                                                             <g>
                                                                 <path
                                                                     d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                 <path
                                                                     d="M73.1685 16.7875C73.1344 16.4389 73.0663 16.0817 72.9812 15.733C72.2235 6.92252 64.8252 0 55.8094 0C46.2828 0 38.561 7.71343 38.561 17.2298C38.561 26.474 45.8486 33.9918 54.9921 34.417C52.7871 37.8953 49.2369 40.7102 44.9036 42.0369L44.7588 42.0794C42.7496 42.6917 41.3619 44.6477 41.5492 46.8248C41.7621 49.3336 43.9671 51.1961 46.4871 50.9835C53.9024 50.3541 61.3177 46.5697 66.3577 40.4211C68.8862 37.3595 70.8443 33.7537 72.0362 29.8247C73.2366 25.9042 73.6453 21.669 73.2366 17.4934L73.1685 16.7875Z" />
                                                             </g>
                                                         </svg>
                                                     </div>
                                                     <div class="date-and-time">
                                                         <p>{{ $testimonial->created_at->format('M j, Y') }}</p>
                                                         <span>{{ $testimonial->created_at->format('g:i A') }}</span>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="author-img-and-rating">
                                                 <div class="author-img">

                                                     @if ($testimonial->photo)
                                                         <img src="{{ asset('uploads/testimonials/' . $testimonial->photo) }}"
                                                             alt="Photo Témoignage" width="100" height="100">
                                                     @else
                                                         Pas de photo
                                                     @endif
                                                 </div>
                                             </div>
                                         </div>
                                     @endforeach
                                 @endif

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="text-center mt-40" style="color: #b42020; border-color: #9b2323;">
                 <button type="button"
                     class="rbt-btn btn-border primary-btn1 hover-btn3 icon-hover radius-round color-white-off"
                     data-bs-toggle="modal" data-bs-target="#exampleModal"
                     style="color: #d6cfcf; background-color: rgb(46, 46, 42); border-color: #9b2323;">
                     Laissez votre témoignage
                 </button>

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
                                     <textarea class="form-control border-0 rounded-3 shadow-sm" id="testimonial" name="message" rows="8"
                                         required></textarea>
                                 </div>
                                 <div class="text-center">
                                     <button type="submit" class="btn btn-primary rounded-pill shadow">Envoyer</button>
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
                                     background-color: #007bff;
                                     border-color: #007bff;
                                 }

                                 button.btn-primary:hover {
                                     background-color: #0056b3;
                                     border-color: #0056b3;
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


         </div>
         <!-- End Testimonial section -->

         <div class="banner-footer mb-11">
             <div class="container-fluid p-0">
                 <div class="banner-footer-wrapper">
                     <div class="row g-lg-4 gy-4">
                        <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                       {{--   <div class="col-lg-3 col-sm-6 d-flex justify-content-lg-end justify-content-center">
                        --}}      <div class="banner-footer-item">
                                 <div class="banner-footer-icon">
                                    <img src="assets/img/home1/footer/livraison.png" alt="" width="50" height="50" class="img1">
                                 
                                 </div>
                                 <div class="banner-footer-content">
                                     <h5>Livraison rapide</h5>
                                     <p>Livraison gratuite à partir de 100 DT
                                         </p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                       {{--   <div class="col-lg-3 col-sm-6 d-flex justify-content-lg-end justify-content-center"> --}}
                            <div class="banner-footer-item">
                                <div class="banner-footer-icon">
                                   <img src="assets/img/home1/footer/qualite.png" alt="" width="50" height="50" class="img1">
                                   
                               
                                </div>
                                <div class="banner-footer-content">
                                    <h5>Rapport/Quatité</h5>
                                    <p>Econemisez chez nous
                                        </p>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                             <div class="banner-footer-item">
                                 <div class="banner-footer-icon">
                                   
                                    <img src="assets/img/home1/footer/boite-de-retour.png" alt="" width="50" height="50" class="img1">
                                    
                               
                                 </div>
                                 <div class="banner-footer-content">
                                     <h5>Echange & Retour</h5>
                                     <p>Retour d'article sous condition.
                                   </p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                             <div class="banner-footer-item">
                                 <div class="banner-footer-icon">
                                    <img src="assets/img/home1/footer/payement.png" alt="" width="50" height="50" class="img1">
                                    
                                 
                                 </div>
                                 <div class="banner-footer-content">
                                     <h5>Satisfactions Clients</h5>
                                     <p>La satisfaction du client est la première priorité
                                         </p>
                                 </div>
                             </div>
                         </div>
                       
                     </div>
                 </div>
             </div>
         </div>

         <style>
             .top-left {
                 position: absolute;
                 top: 8px;
                 left: 16px;
                 color: red;
             }

             .top-right {
                 position: absolute;
                 top: 8px;
                 right: 16px;
                 color: red;
             }
         </style>
     </main>


 @endsection
