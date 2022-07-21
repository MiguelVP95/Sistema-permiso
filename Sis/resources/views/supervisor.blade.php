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
        <h1 class="h3"><font color="white">SOLICITUD DE PERMISOS</font></h1>     
        </div>
      </div>


<!-- INICIO DE MODALES CON FUNCIONES DE REDIRECCION A VIEW -->
   &nbsp<div class="d-grid gap-5 col-5 mx-auto">
        <button style="background-color:#AEBB39; border-color:#AEBB39" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Funcionario</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="Funcionario" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Funcionario">Ingrese su número de:</h5>
        <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      </div>
      <div class="modal-body">

<!-- FORM DE LEGAJO -->
      <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Legajo:</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      
    </span>
  </div>
</div>

<!-- FORM DE CONTRASEÑA -->
&nbsp<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Contraseña:</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      
    </span>
  </div>
</div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" style="background-color:#AEBB39;border-color:#AEBB39">Continuar</button>
      </div>
    </div>
  </div>
</div>


        <button style="background-color:#AEBB39; border-color:#AEBB39" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Supervisor</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="Supervisor" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Supervisor">Ingrese su número de:</h5>
        <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      </div>
      <div class="modal-body">

  <!-- FORM DE LEGAJO -->
      <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Legajo:</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      
    </span>
  </div>
</div>

<!-- FORM DE CONTRASEÑA -->
&nbsp<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Contraseña:</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      
    </span>
  </div>
</div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" style="background-color:#AEBB39;border-color:#AEBB39">Continuar</button>
      </div>
    </div>
  </div>
</div>
        <button style="background-color:#AEBB39; border-color:#AEBB39" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Otros</button>
        
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="Otro" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Otro">Otros</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color:#AEBB39;border-color:#AEBB39">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!--<h2><center>descripcion</center></h2>-->



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
      <th scope="row">1</th>
      <td>Por enfermedad del titular (Capitulo 5.2; Art.5.2.1.inc.i)</td>
      <td>15 días por año calendario</td>
      <td><center>NO</center></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Chequeo Médico</td>
      <td>2 días al año ley 6211/18 y 6280/19 - 1 dia cheq. laboral</td>
      <td><center>NO</center></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Vacaciones (Capitulo 5.2)</td>
      <td>Segun disposiciones</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Atención familiar - enf. de padres, conyuge, hijos (Capitulo 5.2; Art.5.2.1.inc.g)</td>
      <td>10 días hábiles por año calendario</td>
      <td><center>SI</center></td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Licencia por matrimonio (Capitulo 5.2; Art.5.2.1.inc.c)</td>
      <td>12 días corridos</td>
      <td><center>SI</center></td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>Licencia por maternidad (Ley Nº 5508/15, Art.11)</td>
      <td>Segun disposiciones</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>Licencia por paternidad (Ley Nº 5508/15, Art.13 b)</td>
      <td>14 días corridos con goce de sueldo</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">8</th>
      <td>Horario especial por lactancia (Ley Nº 5508/15, Art.14)</td>
      <td>Segun propuesta de la trabajadora</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">9</th>
      <td>Duelo-fallecimiento padres, conyuge, hijos o suegros (Capitulo 5.2; Art.5.2.1.inc.d)</td>
      <td>5 días hábiles</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">10</th>
      <td>Duelo-fallecimiento de otro familiar (Capitulo 5.2; Art.5.2.1.inc.f)</td>
      <td>1 día hábil</td>
      <td><center>SI</center></td>
    </tr>

    <tr>
      <th scope="row">11</th>
      <td>Licencia Gremial (Capitulo 9.2.1)</td>
      <td>Segun disposiciones</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">12</th>
      <td>Permiso Gremial (Capitulo 9.2.2)</td>
      <td>Segun disposiciones</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">13</th>
      <td>Particular</td>
      <td>Hasta 10 horas al mes</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">14</th>
      <td>Licencia por examen (Capitulo 5.2; Art.5.2.1.inc.h)</td>
      <td>20 dias corridos por año calendario, max 2 dias por ex.</td>
      <td><center>SI</center></td>
    </tr>

    <tr>
      <th scope="row">15</th>
      <td>Capacitación</td>
      <td>Segun disposiciones</td>
      <td><center>SI</center></td>
    </tr>
  
    <tr>
      <th scope="row">16</th>
      <td>Sin Registro de Entrada</td>
      <td>Hasta 1 vez en el mes</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">17</th>
      <td>Sin Registro de Salida</td>
      <td>Hasta 1 vez en el mes</td>
      <td><center>NO</center></td>
    </tr>

    <tr>
      <th scope="row">18</th>
      <td>Llegada tardía</td>
      <td>Segun disposiciones</td>
      <td><center>SI</center></td>
    </tr>
    
    <tr>
      <th scope="row">19</th>
      <td>Otros (especificar en observación)</td>
      <td>Segun disposiciones</td>
      <td><center>--</center></td>
    </tr>
  </tbody>
</table>

    
      <!--<div class="table-responsive">
        <table class="table table-striped table-sm table-success table-bordered border-success">
          <thead>
            <tr>
              <th scope="col">COD</th>
              <th <center>scope="col">AUSENCIAS JUSTIFICADAS</center></th>
              <th <center> scope="col">OBSERVACION</center></th>
              <th <center>scope="col">Incide: Premio Asistencia Perfecta</center></th>
        
            </tr>
          </thead>
          <tbody>
            
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
        
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>-->


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
