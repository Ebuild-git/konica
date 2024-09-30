@extends('front.fixe')
@section('titre', "Contact")
@section('body')
    <main>
@php
    
    $config = DB::table('configs')->first();
@endphp

<div class="axil-breadcrumb-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="inner">
                    <ul class="axil-breadcrumb">
                        <li class="axil-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="separator"></li>
                        <li class="axil-breadcrumb-item active" aria-current="page">A Propos de Nous</li>
                    </ul>
                    <h1 class="title">A Propos de notre Boutique</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="inner">
                    <div class="bradcrumb-thumb">
                        <img  src="{{ Storage::url($config->image_about) }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area  -->

<!-- Start About Area  -->
<div class="axil-about-area about-style-1 axil-section-gap ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-6">
                <div class="about-thumbnail">
                    <div class="thumbnail">
                        <img src="{{ Storage::url($config->image_apropos) }}" alt="About Us">
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-6">
                <div class="about-content content-right">
                    <span class="title-highlighter highlighter-primary2"> <i class="far fa-shopping-basket"></i>A Propos de nous</span>
                    <h3 class="title">{{ $config->titre_apropos ?? '' }}</h3>
                    
                    <div class="row">
                        <div class="col-xl-12">
                            <p style="text-align: justify">{!! $config->des_apropos ?? ' ' !!}</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area  -->


<!-- Start About Area  -->
<div class="axil-about-area about-style-2">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-5 order-lg-2">
                <div class="about-thumbnail">
                    <img src="{{ Storage::url($config->image_apropos2) }}"alt="about">
                </div>
            </div>
            <div class="col-lg-7 order-lg-1">
                <div class="about-content content-left">
                   
                    <h4 class="title">{{ $config->titre_apropos2 }}</h4>
                    <p style="text-align: justify">{!! $config->des_apropos2 !!}</p>
                    <a href="{{ route('shop') }}"  class="axil-btn btn-outline">Voir Boutique</a>
                </div>
            </div>
        </div>
        <div class="row align-items-center mb--80 mb_sm--60">
            <div class="col-lg-5">
                 <div class="about-thumbnail">
                    <img src="{{ Storage::url($config->image_apropos2) }}" alt="about">
                </div> 
            </div>
            <div class="col-lg-7">
                <div class="about-content content-right">
                   
                  <h4 class="title">{{ $config->titre_apropos1 }}</h4>
                    <p style="text-align: justify">{!! $config->des_apropos1 ?? ' ' !!}</p>
                    <a href="{{ route('shop') }}" class="axil-btn btn-outline">Voir Boutique</a>
                </div>
            </div>
        </div>
       
    </div>
</div>
<!-- End About Area  -->


<!-- End Axil Newsletter Area  -->
</main>

<br><br>

<div class="service-area">
    <div class="container">
        <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="./assets/images/icons/service1.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Livraison  &amp;rapide et sécurisée</h6>
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

        
    </main>
    @endsection
    
