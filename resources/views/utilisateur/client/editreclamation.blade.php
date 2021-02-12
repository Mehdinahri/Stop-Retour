@extends('layouts.app-user')
@section('css')
 <style>
   
 </style>
@endsection
@section('content')
<div class="row">
  @if(Session::has('success'))
      <div class="alert alert-success" role="alert" style="margin: 1%; width:100%">
        {{Session::get('success')}}
      </div>
    @endif
    @if(Session::has('danger'))
      <div class="alert alert-danger" role="alert" style="margin: 1%; width:100%">
        {{Session::get('danger')}}
      </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger" role="alert" style="margin: 1%; width:100%">
          @foreach ($errors->all() as $error)
              - {{$error}} <br>
          @endforeach
        </div>
      @endif
</div>
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Modifier Votre Declaration</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form role="form" action="{{route('reclamation.update',$reclamation)}}" method="post">
      <div class="row">
        @csrf
        @method('PUT')
        <div class="col-md-6">
          <div class="form-group">
            <label>Téléphone :</label>
            <input type="text" name="tel" id="tel" value="{{ $reclamation->client->numTel }}" disabled>
          </div>
          <div class="form-group">
            <label>Utilisateur :</label>
            <input type="text" name="tel" id="tel" value="{{ $reclamation->user->name }}" disabled>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Declaration :</label>
            <textarea name="commentaire" id="commentaire" style=" width: 100%; height: 100px; border-radius: 12px; padding: 4px; ">{{ $reclamation->commentaire}}</textarea>
          </div>
          <div class="form-group text-right">
            <button type="submit" class="btn btn-gold btn-sm">Modifier</button>
          </div>
          <!-- /.form-group -->
        </div>
      <!-- /.col -->
    </div>
  </form>
  <!-- /.row -->
  </div>
  <!-- /.card-body -->
  
</div>

@endsection




