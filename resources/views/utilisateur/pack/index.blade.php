@extends('layouts.app-user')
@section('css')
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <style type="text/css">
            .owl-dots{
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
        </style>
@endsection

@section('content')

<div class="container bg-white p-3">
        <div class="row owl-carousel">
            @foreach ($packs as $pack)
                <div class="col-md-12">
                    <div class="pricing-table">
                            <div class="ptable-item">
                            <div class="ptable-single  d-flex flex-column">
                                <div class="ptable-header">
                                <div class="ptable-title">
                                    <h2>{{ $pack->titre }}</h2>
                                </div>
                                <div class="ptable-price">
                                    <h3>{{ $pack->prix }} <small>DH</small></h3>
                                </div>
                                </div>
                                <div class="ptable-body">
                                <div class="ptable-description">
                                    <ul>
                                    <li>{{ $pack->offre }}</li>
                                    <li><span style="font-weight: bold;">{{ $pack->solde }}</span> <small>consultation</small></li>
                                    <li>Déclarations illimitées</li>
                                    <li>Support par ticket</li>
                                    <li>Support 24h/7j</li>
                                    <li>Messagerie interne</li>
                                    </ul>
                                </div>
                                </div>
                                <div class="ptable-footer mt-auto">
                                <div class="ptable-action">
                                    <a href="{{ route('utilisateur-pack.show',['utilisateur_pack' => $pack->id]) }}" class="btn btn-gold">Acheter</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
</div>

@endsection

@section('js')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
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
                }
                );
            });
        
    </script>
@endsection



