@extends('front.fixe')
@section('titre', "Contact")
@section('body')
    <main>


  
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                  
                     <div class="col-lg-6 col-md-8"> 
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Contact</li>
                            </ul>
                            <h1 class="title">Contactez-nous</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                         <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="{{ Storage::url($configs->image_contact) }}" alt="Image">
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start Contact Area  -->
        <div class="axil-contact-page-area axil-section-gap">
            <div class="container">
                <div class="axil-contact-page">
                    <div class="row row--30">
                        <div class="col-lg-8">
                            <div class="contact-form">
                                <h3 class="title mb--10">Nous aimerions avoir de vos nouvelles.</h3>
                                <p>Si vous avez d'excellents produits que vous fabriquez ou que vous souhaitez travailler avec nous, envoyez-nous un message.</p>
                                @livewire('Front.ContactForm')
                            
                         
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-location mb--40">
                                <h4 class="title mb--20">Notre magasin</h4>
                                <span class="address mb--20"> {{ $configs->addresse ?? ' ' }}</span>
                                <span class="phone">Télphone: {{ $configs->telephone ?? ' ' }}</span>
                                <span class="email">Email: {{ $configs->email ?? ' ' }}</span>
                            </div>
                           
                            <div class="opening-hour">
                                <h4 class="title mb--20">Horaires d'ouverture:</h4>
                                <p>Du lundi au samedi : 9h00 - 22h00
                                    <br> Dimanche : 10h00 - 18h00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Google Map Area  -->
                <div class="axil-google-map-wrap axil-section-gap pb--0">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=melbourne&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <!-- End Google Map Area  -->
            </div>
        </div>
        <!-- End Contact Area  -->
   

    </main>
@endsection
