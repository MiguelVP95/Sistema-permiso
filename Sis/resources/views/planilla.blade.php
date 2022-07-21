@extends('layouts.app')

@section('content')
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>

  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/registrofuncionario')}}">
              <span data-feather="home"></span>
              Registrar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">FORMULARIO DE AUTORIZACIONES</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
        <input class="form-control " type=""  placeholder=  "{{ date('d-m-Y') }}" aria-label="Disabled input example" disabled > 
        </div>
      </div>

              <div class="row border py-5">             
                <div class="col-4">               
                  Nº DE LEGAJO:
                  <input class="form-control " type="text"  placeholder=  "{{ Auth::user()->username }}" aria-label="Disabled input example" disabled >

                </div>
              
                <div class="col-4">
                NOMBRE Y APELLIDO:                      

                      <input class="form-control " type="text" placeholder="{{ Auth::user()->name }}" aria-label="Disabled input example" disabled>

                </div>
                    
                <div class="col-4 ">
                      DEPENDENCIA:
                      <input class="form-control" type="text" placeholder="{{ Auth::user()->dependencia }}" aria-label="Disabled input example" disabled>

                </div>
                <div class="col-md-4 py-5">
                      <label for="inputCity" class="form-label">SEDE:</label>
                      <input class="form-control" type="text" placeholder="{{ Auth::user()->sede }}" aria-label="Disabled input example" disabled>

                </div>
                    
                    


                    
              </div>

                    <div class="row  py-5"> 
                      <form  method="POST" action="{{ url('/planilla') }}">
                      {{ csrf_field() }}
                      <div class="col-md-10">
    <label for="codigo" class="form-label">SELECCIONE EL MOTIVO:</label>
    <div class="col-md-4">
    <select class="form-select" name="cod_motivo"  required autocomplete="cod_motivo">
    

      <option selected disabled name="">Elija.</option>
      
                            @foreach ($codigos as $c)
                            <option >{{$c->motivo}}</option>
                            

                            @endforeach 
                            
    </select>
                                
                                @error('cod_motivo')
                                   <small style="color:red"><h6>{{$message}}<h6></small>
                                @enderror
                               
    </div>
  </div>
                        <!--<div class="col-md-4">
                        <label for="codigo" class="col-form-label" >SELECCIONE EL MOTIVO:</label>
                        
                          <select for="" class="form-select" name="cod_motivo">
                          <option></option>
                            @foreach ($codigos as $c)
                            <option >{{$c->motivo}}</option>

                            @endforeach       
                                          
                          </select>
                        </div>-->

                        <div class="row">
                            <div class="col-sm-6 top-right">
                                <div class="col-md-4 py-2">
                                    <label for="fecha_inicio" class="col-sm-10 col-form-label">DESDE FECHA:</label>
                                    <input type="date" class="form-control" name="fecha_inicio">
                                </div>
                            </div>
                            <div class="col-sm-6 top-left">
                              <div class="col-md-4 py-2">
                                  <label for="hora_inicio" class="col-sm-8 col-form-label">DESDE HORA:</label>
                                  <input type="time" class="form-control" name="hora_inicio">
                              </div>
                           
                            </div>
                          <div class="col-sm-6 top-right">
                                <div class="col-md-4">
                                    <label for="fecha_fin" class="col-sm-8 col-form-label">HASTA FECHA:</label>
                                    <input type="date" class="form-control" name="fecha_fin">
                                </div>
                          </div>
                          <div class="col-sm-6 top-left">
                            <div class="col-md-4">
                                <label for="hora_fin" class="col-sm-8 col-form-label">HASTA HORA:</label>
                                <input type="time" class="form-control" name="hora_fin">
                            </div>
                          </div>
                        </div>
                        <div class="row  py-2">
                            <div class="col-md-10">
                                <label for="obs" class="form-label" name="obs">OBS.</label>
                                <textarea class="form-control" name="obs" ></textarea>
                            </div>
                           
                        </div>


                        <br>
                            <div class="col-12">
                              <button type="submit" class="btn btn-success">Guardar Cambios</button>
                            </div>
                      </form>
                    </div>
              
              
        
                  

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                   
    

                
           
        
    </div>




      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
         
                <tr>
                  <td></td>
                  
                  
          </tr>
          
          </thead>
          <tbody>
         
            
            </tr>

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection