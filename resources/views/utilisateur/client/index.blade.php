@extends('layouts.app-user')

@section('css')

 <style>

   .a-user:hover {

    color: #baa95a;

    text-decoration: none;

    cursor: pointer;

  }

  .btn{

    font-size: 17px

  }

 </style>

@endsection

@section('content')

    @if($user->illimite == 0)

        @if($canUseConsultation !== false)

            @if( $canUseConsultation < 7)

            <div class="card borderTop  mb-3 p-0 text-center "  style="max-width:100%">

             <div class="alert alert-warning p-1 mb-0">Il reste {{ 7-$canUseConsultation}} jours sur votre compte d'essai. Merci d'activer votre compte avec l'offre de votre choix avant l'écoulement de cette période.</div>

            </div>

             @else

            <div class="card borderTop  mb-3 p-0 text-center "  style="max-width:100%">

             <div class="alert alert-warning p-1 mb-0">Merci d'activer votre compte avec l'offre de votre choix pour consulter.</div>

            </div>

            @endif

        @endif

    @endif



  <div class="card borderTop  mb-3" style="max-width:100%">

    <div class="card-body text-secondary">

      <div class="row">

        <div class="col-8">

            <form  method="get" action="{{ route('client-user.search') }}">

                  <div class="input-group">

                      <div style="width: 100%;">

                          <p style="font-size: 19px;">Faire une consultation</p>

                        </div>

                        

                      @if($canUseConsultation > 7)

                      <input name="search" type="tel" class="form-control form-control-sm" style=" font-size: 12px; " placeholder="Chercher un client par téléphone" pattern="[0-9]{10}"  required disabled>

                      <div class="input-group-append">

                          <button id="search" class="btn btn-sm btn-gold" style="font-size: 12px;" disabled>

                              <i class="fa fa-search"></i>

                          </button>

                      </div>

                      @else

                      <input name="search" type="tel" class="form-control form-control-sm" placeholder="Chercher un client par téléphone" pattern="[0-9]{10}" maxlength="10"  required>

                      <div class="input-group-append">

                          <button id="search" class="btn btn-sm btn-gold" style="font-size: 12px;">

                              <i class="fa fa-search"></i>

                          </button>

                      </div>

                      @endif

                      

                  </div>

            </form>

        </div>

        <div class="col-4">

            <button class="btn @if($user->illimite == 1) btn-gold m-3 @elseif( $user->count <15) btn-danger @elseif($user->count <40) btn-warning @else btn-success @endif float-right ">

                @if($user->illimite == 1) 

                    <span class="text-gold" style=" font-weight: 800; "> Solde illimité</span>

                @else

                    Solde : {{ $user->count }} consultation(s) restante(s)

                @endif

            </button>

        </div>

      </div>

    </div>

  </div>

  <div class="card borderTop  mb-3" style="max-width:100%">

    <div class="card-header"><i class="fas fa-user"></i> Informations Client: 

      @isset($client)

      <span class="info-box-text"> {{ $client->reclamations_count }} Déclaration(s)</span>

      @endisset

    </div>

    <div class="card-body text-secondary">

      @isset($message)

        <p class="card-text alert alert-danger  alert-dismissible fade show text-center" style="padding: 2px !important;">{{ $message ?? '' }}</p>

      @endisset

       @isset($client)

        {{--<span class="pr-1"><i class="fas fa-user-tie text-"></i> {{ $client->nom ?? 'inconnu' }}</span> |

        <span class="pr-1"><i class="fas fa-city text-"></i> {{ $client->ville ?? 'inconnu'}}</span> |

        <span class="pr-1"><i class="fas fa-envelope text-"></i> {{ $client->email ?? 'inconnu' }}</span> | --}}

        <span class="pr-1"><i class="fas fa-mobile-alt text-"></i> {{ $client->numTel ?? 'inconnu' }}</span>

      @endisset

      @empty($client)

            <div class="card-text">Pas d'information</div>

      @endempty

   </div>

  </div>



  <div class="card borderTop  mb-3" style="max-width:100%">

    <div class="card-header">

      <div class="row">

        <div class="col">

          @isset($client)

          <div style=" width: 190px; ">

            <img alt="First slide" style=" margin-bottom: -7px; " class="d-block w-100" src="{{ asset('images/jauge.png') }}">

            <i class="fas fa-caret-up" style=" margin-left: @if($client->reclamations_count<5) {{ ($client->reclamations_count*32) }}px @else 180px @endif ; "></i>

          </div>

          @endisset

          @empty($client)

            <i class="fas fa-exclamation"></i> Déclaration

          @endempty

        </div><!--end col-->

        <div class="col">

          {{-- if this user don't have reclamation for this client show this button --}}

          @isset($can)

            @if ($can)

            <a class="btn btn-gold btn-sm float-right text-light" data-toggle="modal" data-target="#addReclamation">Ajouter Votre Déclaration <i class="fas fa-exclamation text-danger"></i></a>

            <div class="modal fade" id="addReclamation" tabindex="-1" aria-labelledby="addReclamation" aria-hidden="true">

              <div class="modal-dialog">

              <div class="modal-content">

                  <div class="modal-header">

                  <h5 class="modal-title" id="exampleModalLabel">Ajouter une Déclaration</h5>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                      <span aria-hidden="true">&times;</span>

                  </button>

                  </div>

                  <div class="modal-body">

                      <form method="POST" action="{{ route('client-user.reclamation',['reclamation'=>$client->id]) }}">

                          @csrf

                          @method('POST')

                          <div class="form-group">

                              @if ($errors->has('commentaire'))

                              <span class="text-danger">{{ $errors->first('commentaire') }}</span>

                              @endif

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire" placeholder="Posé votre déclaration"></textarea>

                            <input type="hidden" name="client" value="{{ $client->id }}">

                            <input type="hidden" name="user" value="{{ $user->id }}">

                          </div>

                          <div class="float-left">

                              <button type="submit" class="btn btn-gold btn-sm">Enregistrer  <i class="fas fa-save"></i></button>

                          </div>

                          <div class="float-right">

                              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Fermer  <i class="fas fa-times"></i></button>

                          </div>

                      </form>

                  </div>

              </div>

              </div>

            </div>

            @endif

          @endisset

        </div><!--end col-->

      </div><!--end row-->

    </div><!--end header-->

    <div class="container m-2 mb-4" style="display: flex;">

      {{-- Show reclamation --}}

      @isset($client)

        <div class="row" style="width: 100%">

            @forelse ($client->reclamations as $r)

            @if($r->user->id == Auth::id())

            @php

              $now   = time();

              $date2 = strtotime($r->created_at);

              $diff  = abs($now - $date2);

              $diff = $diff/3600;

            @endphp

            <div class="col-md-11">

              <div class="card mt-2 pl-3 pr-3">

                <div class="card-header" style="background-color: white;padding: 6px 3px;">

                  <span><a class="a-user"><b style="margin-right: 5px;"> {{ $r->user->name }} </b></a> </span>

                  <small> {{ $r->created_at->diffForHumans()}}</small>

                  @if($diff<=24)

                  <span class="float-right"><a href="{{ route('reclamation.show',['reclamation'=>$r]) }}" class="btn-sm btn-danger">Modifier</a></span>

                  @endif

                </div>

                <div class="card-body row" style="padding: 8px 2px;min-height: 65px;">

                    <div class="col-11">

                      {{ $r->commentaire }}

                    </div>

                </div>

              </div>

            </div>

            <div class="col-md-1 text-center pt-3 pl-1">

              <img src="@if($r->user->profile_photo_path=="https://picsum.photos/200") {{ $r->user->profile_photo_path }} @else http://www.stop-retour.com/stopretour/public{{ $r->user->profile_photo_path }} @endif" alt="{{ $r->user->name }}"  width="60px" height="60px" class="rounded-circle obFit"/>

            </div>

            @else

            <div class="col-md-1 text-center pt-3 pl-1">

              <img src="@if($r->user->profile_photo_path=="https://picsum.photos/200") {{ $r->user->profile_photo_path }} @else http://www.stop-retour.com/stopretour/public{{ $r->user->profile_photo_path }} @endif" alt="{{ $r->user->name }}"  width="60px" height="60px" class="rounded-circle obFit"/>

            </div>

            <div class="col-md-11">

              <div class="card mt-2 pl-3 pr-3">

                <div class="card-header" style="background-color: white;padding: 6px 3px;">

                  <span><a class="a-user"href="{{ route('message.show',['dist'=>$r->user->id]) }}"><b style="margin-right: 5px;"> {{ $r->user->name }} </b></a> </span>

                  <small> {{ $r->created_at->diffForHumans()}}</small>

                </div>

                <div class="card-body row" style="padding: 8px 2px;min-height: 65px;">

                    <div class="col-11">

                      {{ $r->commentaire }}

                    </div>

                </div>

              </div>

            </div>

            @endif

        @empty

        <div class="alert alert-info" style="width: 100%" role="alert">

          Aucune déclaration sur ce numéro! Merci de remplir votre déclaration en cas d'incident 

        </div>

      

      @endforelse

      @endisset

      @empty($client)

        <div class="card-text">Pas d'information</div>

      @endempty

    </div>

  </div>

  </div>



@endsection









