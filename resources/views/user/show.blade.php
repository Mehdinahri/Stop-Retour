@extends('adminlte::page')

@section('title', '| Page User')


@section('content')
<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="card-primary">
            <div class="card-header">
              <h3 class="card-title">Modifier Pack</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          <form role="form" action="{{route('user.make.admin')}}" method="post">
            @csrf
            @method('PUT')
              <div class="card-body col-md-11 m-auto">
                <div class="form-group">
                  <label>Solde *</label>
                  <input type="number" name='count' value="{{$user->count}}" class="form-control" placeholder="Enter ..." required>
                  <input type="hidden" name='id' value="{{$user->id}}">
                </div>
                <div class="form-group">
                    <input type="checkbox" name='illimite' class="form-check-input" value="1" @if($user->illimite == 1) checked @endif>
                    <label>Solde illimité</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name='admine' class="form-check-input" value="1" @if($user->role == 1) checked @endif>
                    <label>Admine</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" name='moderateur' class="form-check-input" value="1" @if($user->role == 2) checked @endif>
                  <label>Moderateur</label>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
  <!-- End Modal -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" style="height: 100px !important; object-fit: cover;" src="
                                @if($user->profile_photo_path =='https://picsum.photos/200')
                                {{ $user->profile_photo_path }}
                                @else
                                http://stop-retour.com/stopretour/public{{ $user->profile_photo_path }}
                                @endif" alt="{{$user->name}}">
            </div>

            <h3 class="profile-username text-center">{{$user->name}}</h3>
            <button type="button" style="width: 100%;" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-sm">Modifier</button>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Declarations</b> <a class="float-right">{{$user->reclamations->count()}}</a>
              </li>
              <li class="list-group-item">
                <b>Clients</b> <a class="float-right">{{$user->clients->count()}}</a>
              </li>
              <li class="list-group-item">
                <b>Solde</b> <a class="float-right">@if($user->illimite)<span class="badge badge-pill badge-warning">Illimité</span> @else {{$user->count}} @endif </a>
              </li>
            </ul>

            <a href="{{ route('ticket.contact',['user' => $user])}}" class="btn btn-primary btn-block"><b>Envoyer Message</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">À propos</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-envelope"></i> Email</strong>

            <p class="text-muted">
              @if($user->email) {{$user->email}} @else Vide @endif
            </p>
            
            <hr>

            <strong><i class="fas fa-building"></i> Ville</strong>

            <p class="text-muted">@if($user->email) {{$user->ville}} @else Vide @endif</p>

            <hr>

            <strong><i class="fas fa-mobile-alt"></i> Telephone</strong>

            <p class="text-muted">
              @if($user->email) {{$user->tel}} @else Vide @endif
            </p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Adresse</strong>

            <p class="text-muted">
              @if($user->email) {{$user->adresse}} @else Vide @endif
            </p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-9">
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
        </div>
       <h3 class="text-center pt-3">Declaration d'utilisateur</h3>
        <div class="card">
          <table id="table_id" class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Message</th>
                <th>Date</th>
                <th>Client</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user->reclamations as $reclamation)
                <tr>
                  <td>{{$reclamation->id}}</td>
                  <td>{{$reclamation->commentaire}}</td>
                  <td>{{date('Y-m-d', strtotime($reclamation->created_at))}}</td>
                  <td><a class="btn btn-info btn-sm" href="{{route('client.show',['client' => $reclamation->client])}}" role="button">{{$reclamation->client->numTel}}</a></td>
                  <td>
                    <a class="btn btn-warning btn-sm" href="{{route('reclamation.edit',['reclamation' => $reclamation])}}" role="button"><i class="fas fa-eye"></i></a>
                    <form action="{{route('reclamation.delete',['reclamation' => $reclamation])}}" method="post" id='form{{ $reclamation->id }}'>
                        @csrf
                        @method('DELETE')
                        <a  class="btn btn-sm btn-danger text-light" onclick="deleteConfirmation({{ $reclamation->id }})"><i class="fas fa-trash fa-sm"></i></a>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>

@stop

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <style>
    .dataTables_wrapper {
    padding: 3% ;
    }
    .img-circle {
    object-fit: cover;
  }
    </style>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script type="text/javascript">

    function deleteConfirmation(reclamation) {
        swal({
            title: "Suppression?",
            text: "Veuillez vous assurer et ensuite confirmer!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Oui, Supprimez-le!",
            cancelButtonText: "Non, Annuler!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                $('#form'+reclamation).submit();
            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready( function () {
      $('#table_id').DataTable(
        {
          "language": {
          "zeroRecords": "Rien trouvé ",
          "info": "Affichage de la page _PAGE_ sur _PAGES_",
          "infoEmpty": "Aucun enregistrement disponible",
          "paginate": {
            "next":       "Suivant",
            "previous":   "Retour"
          },
        }
        }
      );
    } );
  </script>
@stop
