@extends('layouts.app-user')

@section('content')
<div class="row">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert" style="margin: 1%; width:100%">
          {{Session::get('success')}}
        </div>
      @endif
      @isset($success)
        <div class="alert alert-success" role="alert" style="margin: 1%; width:100%">
          {{$success}}
        </div>
      @endisset
      @isset($danger)
        <div class="alert alert-danger" role="alert" style="margin: 1%; width:100%">
          {{$danger}}
        </div>
      @endisset
      @if($errors->any())
        <div class="alert alert-danger" role="alert" style="margin: 1%; width:100%">
          @foreach ($errors->all() as $error)
              - {{$error}} <br>
          @endforeach
        </div>
      @endif
  </div>
<form method="POST" action="{{ route('profile-user.store') }}"  enctype="multipart/form-data" id='profileForm'>
    @csrf
    @method('POST')
    <div class="card borderTop" style="min-height: 450px !important">
        <div class="card-body row">
            <div class="col-sm-6 mt-3">
                <div class="form-group">
                    <label for="ville">Nom</label>
                    <input type="text" class="form-control" id="nom" value="{{ Auth::user()->nom }}" name="nom" disabled>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" name="email" disabled>
                </div>
                <div class="form-group">
                    <label for="name">Nom du store ou magasin</label>
                    <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}" name="name">
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" value="{{ Auth::user()->ville }}" name="ville">
                </div>
                <div class="form-group">
                    <label for="password">Ancien mot de passe</label>
                    <input type="password" class="form-control" id="password" name="oldpassword">
                </div>
                <div class="form-group">
                    <label for="password">Nouveau mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="col-sm-6 mt-3">
                <div class="form-group">
                    <label for="ville">Prenom</label>
                    <input type="text" class="form-control" id="prenom" value="{{ Auth::user()->prenom }}" name="prenom" disabled>
                </div>
                <div class="form-group">
                    <label for="tel">Téléphone</label>
                    <input type="text" class="form-control" id="tel" value="{{ Auth::user()->tel }}" name="tel" disabled>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" value="{{ Auth::user()->adresse }}" name="adresse">
                </div>
                <div class="form-group text-center">
                    <img style="object-fit: cover;" class="rounded-circle" src="
                    @if(Auth::user()->profile_photo_path =='https://picsum.photos/200')
                    {{ Auth::user()->profile_photo_path }}
                    @else
                    http://stop-retour.com/stopretour/public{{ Auth::user()->profile_photo_path }}
                    @endif
                    " alt="{{ Auth::user()->name }}" width="150px" height="150px">
                </div>
                <div class="form-group text-center">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image" data-browse="Importer Image"><i class="fas fa-camera-retro text-gold" style="font-size: 25px;"></i></label>
                    </div>
                </div>
                <div class="form-group">
                    <p class="text-danger mb-1">Format: jpeg,jpg,png,gif</p>
                    <p class="text-danger mb-1">Taille Max: 2Mo</p>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                        <button id='addApp'  class="btn btn-gold btn-md btn-block ld-ext-right"><i class="fas fa-save"></i> Enregistrer
                        <div class="ld ld-ring ld-spin"></div>
                        </button>
                        @if(1==0)<a href="{{ route('profile-user.destroy') }}" class="btn btn-danger btn-md btn-block"><i class="fas fa-trash"></i> Supprimer mon compte</a>@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection

@section('js')
<script>
    $(document).ready(function(){
        
      $("#addApp").click(function(){
        event.preventDefault();
        $(this).addClass("running").delay(4000).queue(function(){
            $('#profileForm').submit();
            $(this).removeClass("running").dequeue();
        })
      });
    })
</script>
@endsection