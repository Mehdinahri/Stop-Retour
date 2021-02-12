<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Stop-Retour</title>



        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        <link rel="stylesheet" href="{{ asset('css/ldbtn.min.css') }}"/>

        <link rel="stylesheet" href="{{ asset('css/loading.css') }}"/>

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

        <link rel="icon" href="images/favicon.ico" type="image/ico" sizes="16x16">

        <style>

            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}

            .text-light:hover{

                color:#debe5b;

            }

          

            @media only screen and (min-width: 576px) {

              .footerButtom {

                margin-top: -55px;

              }

              .tousdroits{

                      height: 80px !important;

              }

              .divider{

                  width: 50%;

              }

              

            }

            @media only screen and (min-width: 990px) {

                ul.navbar-nav.ml-auto.list-unstyled {

                        text-align: center;

                    }

            }

            @media only screen and (max-width: 576px) {

              .to-top{

                      display:none; !important;

              }

              .divider{

                  width: 80%;

              }

            }

        </style>

        <style type="text/css">

            .owl-dots, .owl-nav{

                text-align: center

            }

            button.owl-dot.active{

                background-color: #debe5b !important;

            }

            button.owl-dot{

                background-color: #a1a097 !important;

                border: 1px solid black !important;

                padding: 5px !important;

                border-radius: 15px !important;

                margin-left: 2px;

                width: 7%;

            }

            .owl-nav button {

                width: 5%;

                border: outset !important;

            }

            .owl-nav button.disabled {

                color:red;

            }

            .navbar{

                width:100vw;

            }

        </style>

    </head>

    <body class="antialiased welcome">



        <nav class="navbar navbar-expand-lg navbar-light  fixed-top" id="home">

            <div class="container">

                <a class="navbar-brand  main-color" href="#home"><img src="{{ asset('images/logo.png') }}" width="40px" /></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                       <li class="nav-item active">

                           <a class="nav-link text-light" href="#home">Home</a>

                       </li>

                       <li class="nav-item">

                        <a class="nav-link text-light" href="#apropos">A PROPOS</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-light" href="#tarification">Nos Offres</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-light" href="#contact">Contactez nous</a>

                        </li>

                    </ul>

                    @if (Route::has('login'))

                    @auth

                    <ul class="navbar-nav ml-auto list-unstyled">

                        <li class="nav-item list-unstyled ">

                            <a href="{{ route('utilisateur.index') }}" class="nav-link text-light">Espace Client</a>

                        </li>

                        @else

                        <li class="nav-item list-unstyled " >

                            <a href="{{ route('register') }}" class="nav-link text-light">S'inscrire</a>

                        </li>

                        <li class="nav-item list-unstyled " >

                            <a href="{{ route('login') }}" class="nav-link text-light">Se connecter</a>

                        </li>

                    </ul>

                    @endauth

                    @endif

                    <span style="margin-right: 3px;"><a href="{{ $params->facebook }}"><i class="fab fa-facebook-square"></i></a></span>

                    <span style="margin-right: 3px;"><a href="{{ $params->youtube }}"><i class="fab fa-youtube-square"></i></a></span>

                    <span style="margin-right: 3px;"><a href="{{ $params->instagram }}"><i class="fab fa-instagram-square"></i></a></span>

                </div>

            </div>

        </nav>



        <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">

            <ol class="carousel-indicators">

                <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>

                <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>

                <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>

                <li data-slide-to="3" data-target="#carouselExampleIndicators"></li>

            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">

                    <img alt="First slide" class="d-block w-100 " src="{{ asset('images/slide_active.jpg') }}">

                </div>

                <div class="carousel-item">

                    <img alt="Second slide" class="d-block w-100 " src="{{ asset('images/slide_1.jpg') }}">

                </div>

                <div class="carousel-item">

                    <img alt="Third slide" class="d-block w-100 " src="{{ asset('images/slide_2.jpg') }}">

                </div>

                <div class="carousel-item">

                    <img alt="Third slide" class="d-block w-100 " src="{{ asset('images/slide_3.jpg') }}">

                </div>

            </div>

            <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> 

            <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>

        </div>



        <!-- A propos-->

        <div class="container mt-5 " id="apropos">

            <h2 class="text-center mb-5 headline">a propos</h2>

            <div class="row">

                <div class="col-md-6 d-flex align-items-center">

                    <div class="text-sm-center text-md-left">

                        <h6><i class="fas fa-store-slash aproposIcon"></i></h6>

                        <h5 class="mt-3">{{ $params->apropos_title_1 }}</h5>

                        <p class="mt-3">

                         {{ $params->apropos_1 }}

                        </p>

                        <div class="text-center mt-3">

                            <a class="btn btn-gold" href="{{route('utilisateur-pack.index')}}">Rejoindre la communauté</a>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div>

                        <img src="{{ asset('images/a-1.png') }}" width="100%" />

                    </div>

                </div>

            </div>

        </div>



        <div class="container text-center">

            <img src="{{ asset('images/divider.png') }}" class="divider" alt="">

        </div>



        <!-- Notre Histoire -->

        <div class="container " id="notreHistoire">

            <div class="row">

                <div class="col-md-6">

                    <div>

                        <img src="{{ asset('images/a-2.png') }}" width="100%" />

                    </div>

                </div>

                <div class="col-md-6  d-flex align-items-center">

                    <div class="text-sm-center text-md-left">

                        <h6><i class="fas fa-landmark aproposIcon"></i></h6>

                        <h5 class="mt-3">{{ $params->apropos_title_2 }}</h5>

                        <p class="mt-3">

                         {{ $params->apropos_2 }}

                        </p>

                        <div class="text-center mt-3">

                            <a class="btn btn-gold" href="{{route('utilisateur-pack.index')}}">Rejoindre la communauté</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <div class="container mt-3 text-center">

            <img src="{{ asset('images/divider.png') }}"  class="divider" alt="">

        </div>



        <!-- Notre Mession -->

        <div class="container " id="notreMession">

            <div class="row">

                <div class="col-md-6 d-flex align-items-center">

                    <div class="text-sm-center text-md-left">

                        <h6><i class="fas fa-bullseye aproposIcon"></i></h6>

                        <h5 class="mt-3">{{ $params->apropos_title_3 }}</h5>

                        <p class="mt-3">

                         {{ $params->apropos_3 }}

                        </p>

                        <div class="text-center  mt-3">

                            <a class="btn btn-gold" href="{{route('utilisateur-pack.index')}}">Rejoindre la communauté</a>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div>

                        <img src="{{ asset('images/a-3.png') }}" width="100%" />

                    </div>

                </div>

            </div>

        </div>



        <div class="container text-center">

            <img src="{{ asset('images/divider.png') }}"  class="divider" alt="">

        </div>



        <!-- Notre communauté  -->

        <div class="container " id="notreCommunaute">

            <div class="row">

                <div class="col-md-6">

                    <div>

                        <img src="{{ asset('images/a-4.png') }}" width="100%" />

                    </div>

                </div>

                <div class="col-md-6  d-flex align-items-center">

                    <div class="text-sm-center text-md-left">

                        <h6><i class="fas fa-people-arrows aproposIcon"></i></h6>

                        <h5 class="mt-3">{{ $params->apropos_title_4 }}</h5>

                        <p class="mt-3">

                         {{ $params->apropos_4 }}

                        </p>

                        <div class="text-center mt-3">

                            <a class="btn btn-gold" href="{{route('utilisateur-pack.index')}}">Rejoindre la communauté</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <!-- Pricing -->



        @if ($packs)

        <div id="generic_price_table">

            <h2 class="text-center mb-5 headline">Nos Offres</h2>

            <section id="tarification">

                <div class="container">

                    <!--BLOCK ROW START-->

                    <div class="row owl-carousel">

                        @foreach ($packs as $pack)

                        <div class="col-md-12 m-auto">



                            <!--PRICE CONTENT START-->

                            <div class="generic_content clearfix">



                                <!--HEAD PRICE DETAIL START-->

                                <div class="generic_head_price clearfix">



                                    <!--HEAD CONTENT START-->

                                    <div class="generic_head_content clearfix">



                                        <!--HEAD START-->

                                        <div class="head_bg"></div>

                                        <div class="head">

                                            <span>{{ $pack->titre }}</span>

                                        </div>

                                        <!--//HEAD END-->



                                    </div>

                                    <!--//HEAD CONTENT END-->



                                    <!--PRICE START-->

                                    <div class="generic_price_tag clearfix">

                                        <span class="price">

                                            <span class="currency" style=" font-size: 45px; ">{{ $pack->prix }}</span>

                                            <span class="sign">MAD</span>

                                        </span>

                                    </div>

                                    <!--//PRICE END-->



                                </div>

                                <!--//HEAD PRICE DETAIL END-->



                                <!--FEATURE LIST START-->

                                <div class="generic_feature_list">

                                    <ul>

                                        <li @if($pack->offre == "GRATUIT") style="background-color: #debe5b;color: aliceblue;position: relative;width: 100%;height: 76px;top: -20px;padding-top: 30px;margin-bottom: -15px;" @endif>{{ $pack->offre }}</li>

                                        <li><b style=" font-size: 34px; ">{{ $pack->solde }}</b> Consultations</li>

                                        <li style=" height: 300px; ">

                                            <ol style=" text-align: left; ">

                                                <li>Déclarations illimitées</li>

                                                <li>Support par ticket</li>

                                                <li>Support 24h/7j</li>

                                                <li>Messagerie interne</li>

                                                @if( $pack->offre == "GRATUIT")

                                                <li>Validité 7 jours</li>

                                                @endif

                                            </ol>

                                        </li>

                                    </ul>

                                </div>

                                <!--//FEATURE LIST END-->



                                <!--BUTTON START-->

                                <div class="generic_price_btn clearfix">

                                    @if( $pack->offre == "GRATUIT")

                                        <a href="{{ route('register') }}" class="">S'inscrire</a>

                                    @else

                                        <a class="" href="{{ route('pack.show',['pack'=>$pack->id]) }}">Acheter</a>

                                    @endif

                                </div>

                                <!--//BUTTON END-->



                            </div>

                            <!--//PRICE CONTENT END-->



                        </div>

                        @endforeach

                    </div>

                    <!--//BLOCK ROW END-->

                </div>

            </section>

        </div>

        @endif



        <!-- Contact us -->

        <div class="imgCoverly mt-5 py-5" id="contact">

            <div class="coverly  bg-shape"></div>

            <div class="container">

                <h2 class="text-center mb-5 headline">Contactez nous</h2>

                <div class="row">

                    <div class="col-md-7">

                            <div class="alert alert-danger" id="produite" style="display:none">

                                <ul id="validation-errors">

                                </ul>

                            </div>

                            <div class="alert alert-success" id="succes" style="display:none" role="alert" style="margin: 1%; width:100%">

                              Merci, Votre message a été envoyé avec succès

                            </div>

                        <form action="#" method="post" class="d-flex flex-column" style="height:100%">

                            <div  class="row">

                                <div class="col-md-6 mb-2">

                                  <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom et prenom*" aria-describedby="helpId" required>

                                </div>

                                <div class="col-md-6 mb-2">

                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email*" aria-describedby="helpId" required>

                                </div>

                                <div class="col-12 mb-2">

                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Téléphone*" aria-describedby="helpId" maxlength="10" minlength="10" required>

                                </div>

                            </div>

                            <div class="row ">

                                <div class="col-12 mb-2">

                                    <textarea class="form-control" id="message" mane="message" rows="3" placeholder="Message*" required></textarea>

                                </div>

                                <div class="col-12">

                                    <a id="sendemail" style=" text-align: center;cursor: pointer; " class="form-control main-bg-color" >Envoyer</a>

                                </div>

                            </div>

                        </form>

                    </div>

                    <div class="col-md-5 text-dark">

                        <ul class="list-group">

                            <li class="list-group-item">Maroc</li>

                            <li class="list-group-item"><i class="fas fa-phone"></i> +212 70 7705979</li>

                            <li class="list-group-item"><i class="fas fa-envelope"></i> contact@stop-retour.com</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        

        

        <footer class="text-light">

            <div class="container">

                <div class="row d-flex align-items-center">

                    

                    <div class="col-sm-3 pt-3">

                        <h5>Liens rapides</h5>

                        <ul class="">

                           <li class="">

                               <a class="link-footer" href="#home">Home</a>

                           </li>

                           <li class="">

                                <a class="link-footer" href="#apropos">A PROPOS</a>

                            </li>

                            <li class="">

                                <a class="link-footer" href="#tarification">Nos Offres</a>

                            </li>

                            <li class="">

                                <a class="link-footer" href="#contact">Contactez nous</a>

                            </li>

                        </ul>

                    </div>

                    <div class="col-sm-3 pt-4">

                        <h5>Mentions légales</h5>

                        <ul>

                            <li>

                                <a href="{{ route('Conditions-générales') }}" class="link-footer">Conditions générales</a>

                            </li>

                            <li>

                                <a href="{{ route('Conditions-générales') }}" class="link-footer">Mentions légales </a>

                            </li>

                            <li>

                                <a href="{{ route('Conditions-générales') }}" class="link-footer">sécurité et confidentialité</a>

                            </li>

                            <li>

                                <a href="{{ route('Conditions-Vente') }}" class="link-footer">Conditions générales de vente</a>

                            </li>

                        </ul>

                    </div>

                    <div class="col-sm-6 d-flex footerButtom">

                        <div class="col-sm-6 text-center">

                            

                            <h5 class="m-2">Méthode de paiement</h5>

                                <span><img src="http://www.stop-retour.com/images/visa.png" alt height="30px"></span>

                                <span><img src="http://www.stop-retour.com/images/cmi.png" alt height="30px"></i></a></span>

                                <span><img src="http://www.stop-retour.com/images/masterCard.png" alt height="30px"></i></a></span>

                            

                        </div>

                        <div class="col-sm-6 text-center">

                            <h5 class="m-2">Réseaux sociaux</h5>

                                <span style="margin-right: 3px;"><a href="{{ $params->facebook }}"><i class="fab fa-facebook-square"></i></a></span>

                                <span style="margin-right: 3px;"><a href="{{ $params->youtube }}"><i class="fab fa-youtube-square"></i></a></span>

                                <span style="margin-right: 3px;"><a href="{{ $params->instagram }}"><i class="fab fa-instagram-square"></i></a></span>

                        </div>

                        

                    </div>

                </div>

            </div>

        </footer>

        <footer class="tousdroits" style="background-color: #dabb59; height:57px">

            <div class="container">

                <div class="row d-flex mt-2">

                    <div class="col-sm-4" style="display: flex">

                    </div>

                    <div class="col-sm-4" style="display: flex">

                        <p  style="text-align:center">© Tous droits réservés 2021</p>

                    </div>

                    <div class="col-sm-4">

                    </div>

                </div>

            </div>

        </footer>



        <a href="#" class="to-top"><i class="fas fa-chevron-up"></i></a>

        <script src="{{ asset('js/app.js') }}"></script>

        <script src="{{ asset('js/smooth-scroll.js') }}"></script>

        <script src="{{ asset('js/nice-scroll.js') }}"></script>

        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <script>

            /* start use smooth scroll links */

            var scroll = new SmoothScroll('a[href*="#"]');

            /* start use nice scroll */

            $("body").niceScroll({

                cursoropacitymin:0.1,

                cursorcolor:'#debe5b',

                cursorwidth:'12px',

                cursorborder:'none',

                cursorborderradius:4,

                autohidemode:"scroll",

                zindex:"auto" | [9999]

            });



            // change color the navbar in scrolltop bigger 600 to black

            $(window).scroll(function(){

                $('nav').toggleClass('scrolledTheme',$(this).scrollTop() > 600);

            });

            function send(){

                $("#sendemail").show(1000);;

            }



        </script>

         <script>



            $('#sendemail').click(function(){

                    $.ajax({

                            url:'{{route('contact-us')}}',

                            type:"post",

                            data:{

                                "_token": "{{ csrf_token() }}",

                                nom:$("#nom").val(),

                                email:$("#email").val(),

                                phone:$("#phone").val(),

                                message:$("#message").val()

                            },

                            success:function(res){

                                if(res==true){

                                    $("#nom").val("");

                                    $("#email").val("");

                                    $("#phone").val("");

                                    $("#message").val("");

                                    $( "#produite" ).hide( "slow");

                                    $( "#succes" ).show( "slow");

                                }

                            },

                            error:function(err){

                                $( "#succes" ).hide( "slow");

                                $.each(err.responseJSON.errors, function(key,value) {

                                     $('#validation-errors').append('<li>'+value+'</li>');

                                 }); 

                                $( "#produite" ).show( "slow");

                            }

                        })

                    });



        </script>

        

        <script>

            $(document).ready(function(){

                $(".owl-carousel").owlCarousel({

                    autoplay:true,

                    autoplayTimeout:5000,

                    autoplayHoverPause:true,

                    responsiveClass:true,

                    responsive:{

                        0:{

                            items:1,

                            nav:true

                        },

                        600:{

                            items:2,

                            nav:false

                        },

                        1000:{

                            items:3,

                            nav:true,

                            loop:false

                        }

                    }

                });

            });

        </script>

    </body>

</html>

