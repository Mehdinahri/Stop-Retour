@extends('adminlte::page')


@section('title', '| Paramétrage')

@section('content_header')
    
@stop

@section('content')


    <form method="POST" action="{{ route('parametre-enregistrer') }}">
        @csrf
        <div class="container-fluid">
         
        <div class="row">
    
              <div class="col-md-6">
                  
                <div class="card card-dark collapsed-card">
                    
                  <div class="card-header">
                    <h3 class="card-title">Modifier les liens de réseaux sociaux</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                 
                  </div><!-- /.card-header -->
                  
                  <div class="card-body" style="display: none;">
        
                       
                        <div class="form-group">
                            <label for="facebook">Fecebook</label>
                            <textarea class="form-control" id="facebook" rows="1" name='facebook'>{{ $params->facebook }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <textarea class="form-control" id="instagram" rows="1" name='instagram'> {{ $params->instagram }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <textarea class="form-control" id="youtube" rows="1" name='youtube'>{{ $params->youtube }}</textarea>
                        </div>
        
                  </div>
                  <!-- /.card-body -->
                </div><!-- /.card -->
                
                
        </div>
              <div class="col-md-6">
                  
                <div class="card card-dark collapsed-card">
                    
                  <div class="card-header">
                    <h3 class="card-title">À propos 1</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div><!-- /.card-header -->
                  
                  <div class="card-body" style="display: none;">
                        <div class="form-group">
                            <label for="apropos_title_1">Apropos 1</label>
                            <textarea class="form-control" id="apropos_title_1" rows="4" name='apropos_title_1'>{{ $params->apropos_title_1 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="apropos_1">Apropos 1</label>
                            <textarea class="form-control" id="apropos_1" rows="4" name='apropos_1'>{{ $params->apropos_1 }}</textarea>
                        </div>
                  </div>
                  <!-- /.card-body -->
                </div><!-- /.card -->
                
                
            </div>
              <div class="col-md-6">
                  
                <div class="card card-dark collapsed-card">
                    
                  <div class="card-header">
                    <h3 class="card-title">À propos 2</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div><!-- /.card-header -->
                  
                  <div class="card-body" style="display: none;">
                        <div class="form-group">
                            <label for="apropos_title_2">Titre Apropos</label>
                            <textarea class="form-control" id="apropos_title_2" rows="4" name='apropos_title_2'>{{ $params->apropos_title_2 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="apropos_2">Apropos 2</label>
                            <textarea class="form-control" id="apropos_2" rows="4" name='apropos_2'>{{ $params->apropos_2 }}</textarea>
                        </div>
                  </div>
                  <!-- /.card-body -->
                </div><!-- /.card -->
                
                
            </div>
              <div class="col-md-6">
                  
                <div class="card card-dark collapsed-card">
                    
                  <div class="card-header">
                    <h3 class="card-title">À propos 3</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div><!-- /.card-header -->
                  
                  <div class="card-body" style="display: none;">
                        <div class="form-group">
                            <label for="apropos_title_3">Titre Apropos</label>
                            <textarea class="form-control" id="apropos_title_3" rows="4" name='apropos_title_3'>{{ $params->apropos_title_3 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="apropos_3">Apropos 3</label>
                            <textarea class="form-control" id="apropos_3" rows="4" name='apropos_3'>{{ $params->apropos_3 }}</textarea>
                        </div>
                  </div>
                  <!-- /.card-body -->
                </div><!-- /.card -->
                
                
            </div>
              <div class="col-md-12">
                  
                <div class="card card-dark collapsed-card">
                    
                  <div class="card-header">
                    <h3 class="card-title">À propos 4</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div><!-- /.card-header -->
                  
                  <div class="card-body" style="display: none;">
                        <div class="form-group">
                            <label for="apropos_title_4">Titre Apropos</label>
                            <textarea class="form-control" id="apropos_title_4" rows="4" name='apropos_title_4'>{{ $params->apropos_title_4 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="apropos_4">Apropos 4</label>
                            <textarea class="form-control" id="apropos_4" rows="4" name='apropos_4'>{{ $params->apropos_4 }}</textarea>
                        </div>
                  </div>
                  <!-- /.card-body -->
                </div><!-- /.card -->
                
                
            </div>
    
        </div>
        <input type="submit" class="btn btn-danger" value="Sauvegarder les modifications"/>
      </div>    
    </form> 



  @stop

@section('css')

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'bar',

      // The data for our dataset
      data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
              label: 'My First dataset',
              backgroundColor: 'rgb(52, 152, 219)',
              borderColor: 'rgb(52, 152, 219)',
              data: [0, 10, 5, 2, 20, 30, 45]
          }]
      },

      // Configuration options go here
      options: {}
  });

  var ctx = document.getElementById('myChart1').getContext('2d');
  var chart1 = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
              label: 'My First dataset',
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'rgb(255, 99, 132)',
              data: [0, 10, 5, 2, 20, 30, 45]
          }]
      },

      // Configuration options go here
      options: {}
  });
</script>

@include('sweetalert::alert')

@stop