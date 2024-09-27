@extends('front.fixe')
@section('titre', "Contact")
@section('body')
    <main>

     
          <body>
            
            <div id="content">
                  <div class="breadcrumb">
                    <div class="container">
                      <h2>Contact</h2>
                     {{--  <ul><li>Home</li><li class="active">Contact us</li></ul> --}}
                    </div>
                  </div>
              <div class="contact">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-md-6"> 
                      <h3 class="contact-title">Contact info</h3>
                      <div class="contact-info__item">
                        <div class="contact-info__item__icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-info__item__detail">
                          <h3>Addresse</h3>
                          <p>{{$configs->addresse}}</p>
                        </div>
                      </div>
                      <div class="contact-info__item">
                        <div class="contact-info__item__icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="contact-info__item__detail">
                          <h3>Téléphone</h3>
                          <p>{{$configs->telephone}}</p>
                          
                        </div>
                      </div>
                      <div class="contact-info__item">
                        <div class="contact-info__item__icon"><i class="far fa-envelope"></i></div>
                        <div class="contact-info__item__detail">
                          <h3>Email</h3>
                          <p>{{$configs->email}}</p>
                         
                        </div>
                      </div>
                      <div class="contact-info__item">
                        <div class="contact-info__item__icon"><i class="far fa-clock"></i></div>
                        <div class="contact-info__item__detail">
                          <h3>Horaire d'ouverture</h3>
                          <p>Sun-Sat: 8.00am - 9.00.pm</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <h3 class="contact-title">Entrez en contact</h3>
                      <div class="contact-form">
                        @livewire('Front.ContactForm')
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
           
              
           
             
             
            </div>
 

    </main>
@endsection
