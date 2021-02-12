@extends('layouts.app-user')

@section('css')

  <style>

    .invoice {

    background: #fff;

    border: 1px solid rgba(0,0,0,.125);

    position: relative;

}

    </style>

    

@endsection



@section('content')

@if(Session::has('success'))

      <div class="alert alert-success" role="alert" style="margin: 1%; width:100%">

        {{Session::get('success')}}

      </div>

    @endif
    @isset($danger)

        <div class="alert alert-danger" role="alert" style="margin: 1%; width:100%">

          {{$danger}}

        </div>

      @endisset

<div class="invoice p-3 mb-3" id="invoice">

    <?php

	

		$orgClientId  =   "600002221";

  		$orgAmount = $pack->prix;

  		$orgTransactionType = "PreAuth";

  		$orgRnd =  microtime();

  		$orgCurrency = "504";

		

	?>

  <form role="form" action="{{route('paiement.add')}}" method="post">

    @csrf

    <input type="hidden" name="clientid" value="<?php echo $orgClientId ?>"> 

	<input type="hidden" name="amount" value="<?php echo $orgAmount ?>">

	<input type="hidden" name="TranType" value="<?php echo $orgTransactionType ?>">

	<input type="hidden" name="currency" value="<?php echo $orgCurrency ?>">

	<input type="hidden" name="rnd" value="<?php echo $orgRnd ?>">

	<input type="hidden" name="AutoRedirect" value="true">

	<input type="hidden" name="storetype" value="3D_PAY_HOSTING">

	<input type="hidden" name="hashAlgorithm" value="ver3">

	<input type="hidden" name="lang" value="fr">

	<input type="hidden" name="refreshtime" value="5">

	<input type="hidden" name="encoding" value="UTF-8">

	<input type="hidden" name="oid" value="{{time ( )}}">

  <!-- title row -->

  <div class="row">

    <div class="col-12">

      <h4>

        <span><a class="navbar-brand  main-color" href="#home"><img src="{{ asset('images/logo.png') }}" width="60px" /></a></span> Stop-Retour.com

        <small class="float-right">Date: {{$now}}</small>

      </h4>

    </div>

    <!-- /.col -->

  </div>

  <!-- info row -->

  <div class="row invoice-info">

    <div class="col-sm-4 invoice-col">

      De

      <address>

        <strong>{{$user->nom}} {{$user->prenom}}</strong><br>

        <input type="hidden" name="BillToName" value="{{$user->nom}} {{$user->prenom}}">

        Nom du store:  {{$user->name}}<br>

        <input type="hidden" name="BillToCompany" value="{{$user->name}}">

        <input type="hidden" name="BillToStreet1" value="{{$user->adresse}}">

        ville: {{$user->ville}}<br>

        <input type="hidden" name="BillToCity" value="{{$user->ville}}">

        Phone: {{$user->tel}}<br>

        <input type="hidden" name="tel" value="{{$user->tel}}">

        Email: {{$user->email}}

        <input type="hidden" name="email" value="{{$user->email}}">

      </address>

    </div>

    <!-- /.col -->

    <div class="col-sm-4 invoice-col">

      À

      <address>

        <strong>Stop-Retour.com</strong><br>

      </address>

    </div>

    <!-- /.col -->

    <div class="col-sm-4 invoice-col">

      <b>Facture @if($facture!==0){{($facture->id)+1}} @else 1002 @endif</b><br>

      <br>

    <b>Paiement dû:</b> {{$now}}<br>

    </div>

    <!-- /.col -->

  </div>

  <!-- /.row -->



  <!-- Table row -->

  <div class="row">

    <div class="col-12 table-responsive">

      <table class="table table-striped">

        <thead>

        <tr>

          <th>Solde</th>

          <th>Pack</th>

          <th>Description</th>

          <th>Prix</th>

        </tr>

        </thead>

        <tbody>

        <tr>

          <td>{{$pack->solde ?? ''}}</td>

          <td>{{$pack->titre}}</td>

          <td>{{$pack->description}}</td>

          <td>{{$pack->prix}} MAD</td>

        </tr>

         <input type="hidden" value="{{$pack->id}}" name="pack_id">

        </tbody>

      </table>

    </div>

    <!-- /.col -->

  </div>

  <!-- /.row -->



  <div class="row">

    <!-- accepted payments column -->

    <div class="col-6">

      <p class="lead">méthodes de Payement:</p>

      <img src="/images/visa.png" alt="" height="34px">

      <img src="/images/masterCard.png" alt="" height="34px">

      <img src="/images/cmi.png" alt="" height="34px">

      

    </div>

    <!-- /.col -->

    <div class="col-6">

      <p class="lead">Montant dû {{$now}}</p>



      <div class="table-responsive">

        <table class="table">

          <tbody>

          <tr>

            <th>Total TTC:</th>

            <td>{{$pack->prix}} MAD</td>

          </tr>

        </tbody></table>

      </div>

    </div>

    <!-- /.col -->

  </div>

  <!-- /.row -->



  <!-- this row will not appear when printing -->

  <div class="row no-print">

    <div class="col-12">

                  <button type="submit" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Je paie maintenant

                  </button>

                </div>

  </div>

  </form>

</div>





@endsection

