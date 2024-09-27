@extends('front.fixe')
@section('titre', "Contact")
@section('body')
    <main>
@php
    
    $config = DB::table('configs')->first();
@endphp

  
    <!-- Start Breadcrumb Section -->
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
              </nav>
        </div>
    </div>
    <!-- End Breadcrumb Section section -->

   
        

    <!-- Start Makeup section -->
    <div class="makeup-section mb-110">
        <div class="container">
            <div class="makeup-top-item">
                <div class="row align-items-center justify-content-center g-0 gy-4">
                    <div class="col-lg-6">
                        <div class="makeup-img hover-img">
                            <img src="assets/img/home1/makeup-img1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="makeup-content">
                            <span>BROW BESTSELLERS</span>
                            <h2>They’re kinda our Best thing!</h2>
                            <p>Whatever your summer looks like, bring your own heat with up to 25% off Lumin Brand.Pellentesque ipsum dui, laoreet vitae ex in, pellentesque aliquam leo.</p>
                            <a href="" class="primary-btn1 style-2 hover-btn3">*Shop All Brows*</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center g-0 gy-4">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="makeup-content">
                        <h2>Try on your perfect Best Makeup!</h2>
                        <p>Whatever your summer looks like, bring your own heat with up to 25% off Lumin Brand.Pellentesque ipsum dui, laoreet vitae ex in, pellentesque aliquam leo.</p>
                        <a href="" class="primary-btn1 style-2 hover-btn3">*Try It Now*</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="makeup-img hover-img">
                        <img src="assets/img/home1/makeup-img2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Makeup section -->



        
    </main>
    @endsection
    
