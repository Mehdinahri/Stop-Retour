@extends('adminlte::page')


@section('title', '| Statistique')

@section('content_header')
    
@stop

@section('content')

 <div class="container-fluid p-2">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Tickets</span>
            <span class="info-box-number">
                {{ $ticket }}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-exclamation"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Reclamation</span>
            <span class="info-box-number">{{ $reclamation }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Users</span>
            <span class="info-box-number">{{ $user }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Clients</span>
            <span class="info-box-number">{{ $client }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-6">
        <canvas id="mychart3" class=" bg-white mt-3"></canvas>
      </div>
      <div class="col-md-6">
        <canvas id="myChart1"  class=" bg-white mt-3"></canvas>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart"  class=" bg-white mt-3"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="myChart4"  class=" bg-white mt-3"></canvas>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-12  bg-white">
              <canvas id="lineChart"></canvas>
        </div>
    </div>
  </div>


@stop

@section('css')

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
$(document).ready(function() {

        //Generate number of days in a specified month dynamically
        const days       = []
        const year       = new Date().getFullYear()
        const month      = new Date().getMonth()
        let numberOfDate = new Date(year,month, 0).getDate()
        for (let i = 1; i <= numberOfDate; i++) {days.push(i)}

        $.ajax({
        type: "GET",
        url: "/usersofdays",
            success: function (StatistiqueUser) {
                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'bar',

                    // The data for our dataset
                    data: {
                        labels: days,
                        datasets: [{
                            label: "Statistique de clients s'inscrire en cette mois",
                            backgroundColor: 'rgb(52, 152, 219)',
                            borderColor: 'rgb(52, 152, 219)',
                            data: StatistiqueUser
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
            }
        });

        $.ajax({
        type: "GET",
        url: "/clientsofdays",
            success: function (StatistiqueClient) {
                var ctx = document.getElementById('myChart1').getContext('2d');
                var chart1 = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'line',

                    // The data for our dataset
                    data: {
                        labels: days,
                        datasets: [{
                            fill:false,
                            label: 'Nombre de clients  ajouté à nôtre DB cette mois',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: StatistiqueClient
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
            }
        });
        
        $.ajax({
        type: "GET",
        url: "/reclamationsofdays",
            success: function (StatistiqueReclamation) {
                var ctx = document.getElementById('mychart3').getContext('2d');
                var chart3 = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'line',

                    // The data for our dataset
                    data: {
                        labels: days,
                        datasets: [{
                            fill:false,
                            label: 'Nombre de réclamations  cette mois',
                            backgroundColor: 'rgb(52, 73, 94)',
                            borderColor: 'rgb(52, 73, 94)',
                            data: StatistiqueReclamation
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
            }
        });
        
        $.ajax({
        type: "GET",
        url: "/ticketsofdays",
            success: function (StatistiqueTickets) {
                var ctx = document.getElementById('myChart4').getContext('2d');
                var chart4 = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'bar',

                    // The data for our dataset
                    data: {
                        labels: days,
                        datasets: [{
                            fill:false,
                            label: 'Nombre de tickets  cette mois',
                            backgroundColor: 'rgb(52, 73, 94)',
                            borderColor: 'rgb(52, 73, 94)',
                            data: StatistiqueTickets
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
            }
        });
        
        $.ajax({
            type: "GET",
            url: "/sommedesventes",
            success: function (SommeDesVentes) {
                var ctx = document.getElementById('lineChart').getContext('2d');
                var chart4 = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'bar',

                    // The data for our dataset
                    data: {
                        labels: days,
                        datasets: [{
                            fill:false,
                            label: 'Somme des ventes dans les 30 derniers jours',
                            backgroundColor: 'rgb(52, 73, 94)',
                            borderColor: 'rgb(52, 73, 94)',
                            data: SommeDesVentes
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
            }
        });
        
  });
</script>
</script>

@include('sweetalert::alert')

@stop