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
  </head>
  <body style="background-image:url({{asset('img/fondo.jpg')}}); background-size:100% 100%;background-attachment:fixed;">
    
<header class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">

</header>

<div class="container-fluid">
  <div class="row">
    

    <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3"><font color="white">Formulario de Autorizaciones</font></h1>     
      </div>
  




        <div class="d-grid gap-2 col-10 mx-auto" style="background-color: #ffffff">
          <div class="justify-content-betweenalign-items-center pt-3 pb-2 mb-3 ">
            <h1 class="h4"><font color="">Datos del Solicitante</font></h1>     
          </div>
            <div class="card-header"  >
                  
            <div class="card-body">
            <div class="col-sm-6 top-right">
            
            </div>
            <form   method="POST" action="{{ url('/funcionario') }}">
            @foreach ($funcionarios as $c)

              <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
                  <h1 class="h5">{{$c->name}}</h1></label>
                <div class="col-sm-6">
                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
                  <h1 class="h5"></h1></label>                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
                  <h1 class="h5">Nombre y Apellido</h1></label>
                <div class="col-sm-6">
                  <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
                  <h1 class="h5"></h1></label>
                </div>
            </div>
            <div class="row mb-3">
                      <label for="categoria" class="col-sm-4 col-form-label" > <h1 class="h5">Dependencia</h1></label>
                      <div class="col-sm-6">
                          <select name="text" class="form-select" >
                              <option  value=""></option>
                          </select>    
                     </div>
            </div>
         <div class="row mb-3">
              <label for="categoria" class="col-sm-4 col-form-label" > <h1 class="h5">Sede</h1></label>
                <div class="col-sm-6">
                  <select name="text" class="form-select" >
                      <option  value=""></option>
                  </select>    
                </div>
          </div>
          <div class="row mb-4">
                  <label for="name" class="col-sm-2 col-form-label" >nombre</label>
                  <div class="col-sm-10">
                 
                      <option  value="{{$c->id}}"></option>
                    @endforeach
                  
                 </div>
                </div>
        
    </form>
         
         
        </div>
      </div>
      


        <canvas class="my-4 w-50" id="myChart" width="350" height="50"></canvas>

          <center><table style="background-color:#AEBB39" class="table table-borderless border border-2 border-dark"></center>
        <thead class="table table-border border border-2 border-dark">
          <tr>
            <th scope="col">COD</th>
            
            <th scope="col"><center>AUSENCIAS JUSTIFICADAS</center></th>
            <th scope="col"><center>OBSERVACION</center></th>
            <th scope="col"><center>Incide: Premio Asistencia Perfecta</center></th>
          </tr>
        </thead>
        <tbody>
      

          <tr>
          @foreach ($funcionarios as $p)
                <tr>
                  <td>{{$p->name}}</td>
                  <td>{{$p->username}}</td>
                  <td>{{$p->sede}}</td>
                  
          </tr>
          @endforeach
   
          </tbody>
        </table>

    
     


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

          <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  
    </main>
  </div>
    </div>
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
