@extends('adminlte::page')

@section('title', '| Page User')

@section('content_header')
    <h1  class="text-center">Controler les utilisateures !</h1>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
@stop

@section('content')

<div class="container">
    <div class="row">
            @foreach($users as $user)
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            @if ($user->role==1)
                              Admin  
                            @else
                              Utilisateur
                            @endif
                        </div>
                        <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-8">
                            <h2 class="lead"><b>{{ $user->name }}</b></h2>
                            <h2 class="text-muted text-md">Solde: <span class="badge badge-primary">{{ $user->count }} <i class="fas fa-search-dollar"></i></span> </h2>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> {{ $user->email }}</li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar-alt"></i></span> {{ $user->created_at }}</li>
                            </ul>
                            </div>
                            <div class="col-4 text-center">
                            <img src="
                                @if($user->profile_photo_path =='https://picsum.photos/200')
                                {{ $user->profile_photo_path }}
                                @else
                                http://stop-retour.com/stopretour/public{{ $user->profile_photo_path }}
                                @endif" alt="{{ $user->name }}" class="img-circle img-fluid" style="width: 90px;height: 90px!important;object-fit: cover;">
                            </div>
                        </div>
                        </div>
                        <div class="card-footer">
                        <div class="text-right float-right">
                            <form action="{{ route('user.destroy',['user'=>$user->id]) }}" method="post" id='form{{ $user->id }}'>
                                @csrf
                                @method('DELETE')
                                <a  class="btn btn-sm btn-danger text-light" onclick="deleteConfirmation({{ $user->id }})"><i class="fas fa-trash fa-sm"></i></a>
                            </form>
                        </div>
                        <div class="float-right mr-3">
                            <a href="{{ route('ticket.contact',['user' => $user])}}" class="btn btn-sm bg-teal"><i class="fas fa-comments"></i></a>
                            <a  href="{{route('user.show',['user' => $user])}}" type="submit" class="btn btn-sm btn-primary">Profils</a>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Attention </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        voulez vous supprimer cette utilisateur ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Oui</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </div>
    
    <div class="row">
        <div class="col-12">
        <div class="d-flex justify-content-center">{{ $users->links() }}</div>    
        </div>
    </div>
</div>

@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script type="text/javascript">

    function deleteConfirmation(user) {
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
                $('#form'+user).submit();
            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
@stop

