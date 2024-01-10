<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portafolio | Andry León</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  .font-style {
    font-family: 'Poppins', sans-serif !important;
  }
  </style>
  <style>
    .skills{
      display:block;
      height:1.5rem;
    }
    .skills-container {
      display: flex;
      gap: .5rem;
      min-height: 3rem;
      padding: .5rem 1rem;
      border-radius: 1rem;
      background: #fff;
      transition: background .2s ease;
      border-bottom: .1rem solid #ddd;
      flex-direction: row;
      align-items: center;
    }
    .skills-flex {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      padding-top: 1rem;
    }
    .skills-name{
      display: contents;
      font-size:16px;
    }
    .h-text{
      display:flex;
      font-size:16px;
      font-weight: bold;
      /* justify-content: center; */
    }
  </style>
</head>
<body class="hold-transition layout-top-nav font-style">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-navy">
    <div class="container" style="justify-content: center" >
      <a href="{{url('/')}}" class="navbar-brand">
        <img src="{{ asset('/dist/img/LOGO-ANDRY.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" >
        
      </a>


    </div>
  </nav>
  <!-- /.navbar -->


  <div class="content-wrapper">
    <div class="content">
      <div class="container">
        <div class="row" style="margin-top: 10px">
          <div class="col-lg-3">

          
            <div class="card" style="border-top: 3px solid #131857">
                <div class="card-body box-profile" style="">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset('dist/img/profile.png') }}"
                        alt="Andry León"
                        style="width:160px;border: 3px solid #2b2c3f">
                  </div>

                  <h3 class="profile-username text-center">Andry León</h3>

                  <p class="text-muted text-center">Desarrollador Backend</p>


                  
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
              <div class="card-header" style="background-color: #0a0b21">
                <h5 class="card-title m-0" style="color: white">Contacto</h5>
              </div>
              <div class="card-body">
              <div style="display:flex; justify-content: center">

                  </div>
                  <a href="https://www.linkedin.com/in/andry-jos%C3%A9-le%C3%B3n-b62903237/" class="btn btn-primary btn-block"><i class="fab fa-linkedin-in"></i> <strong> - Linkedin</strong></a>
                  <a href="https://github.com/andryjleon" class="btn btn-dark btn-block"><i class="fab fa-github"></i><strong> - Github</strong></a>
                  <a href="mailto:andryjleon@hotmail.com" class="btn btn-warning btn-block"><i class="far fa-envelope"></i><strong> - Enviar correo</strong></a>
                  <a href="#" class="btn btn-success btn-block"><i class="fas fa-file-alt"></i><b> - Descargar CV</b></a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-9">
          <div class="card" style="border-top: 3px solid #131857">
              <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Sobre mí</strong>

                  <p class="text-muted">
                  Soy un Desarrollador Back-End apasionado por el diseño web y programación.
                  </p>

                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>

                  <p class="text-muted">Maracay, Venezuela</p>

                </div>
              <!-- /.card-body -->
            </div>


            <div class="card">
              <div class="card-header" style="background-color: #0a0b21">
                <h5 class="card-title m-0" style="color: white">Habilidades Tecnicas</h5>
              </div>
              <div class="card-body">

                  <span class="h-text">Backend</span>
                  <ul style="list-style-type: none;" class="skills-flex">
                    <li class="skills-container">
                      <img src="{{ asset('skills/php.png') }}" class="skills">
                      <p class="skills-name"><strong> PHP</strong></p>
                    </li>
                    <li class="skills-container">
                      <img src="{{ asset('skills/laravel.png') }}" class="skills">
                      <p class="skills-name"><strong> Laravel</strong></p>
                    </li>
                    <li class="skills-container">
                      <img src="{{ asset('skills/c-sharp.png') }}" class="skills">
                      <p class="skills-name"><strong> C#</strong></p>
                    </li>
                  </ul>

                  <span class="h-text">Frontend</span>
                  <ul style="list-style-type: none;" class="skills-flex">
                    <li class="skills-container">
                      <img src="{{ asset('skills/html.png') }}" class="skills">
                      <p class="skills-name"><strong> HTML</strong></p>
                    </li>
                    <li class="skills-container">
                      <img src="{{ asset('skills/css.png') }}" class="skills">
                      <p class="skills-name"><strong> CSS</strong></p>
                    </li>
                    <li class="skills-container">
                      <img src="{{ asset('skills/js.png') }}" class="skills">
                      <p class="skills-name"><strong> Javascript</strong></p>
                    </li>
                    <li class="skills-container">
                      <img src="{{ asset('skills/react.png') }}" class="skills">
                      <p class="skills-name"><strong> React JS</strong></p>
                    </li>
                  </ul>

                  <span class="h-text">Base de Datos</span>
                  <ul style="list-style-type: none;" class="skills-flex">
                    <li class="skills-container">
                      <img src="{{ asset('skills/mysql.png') }}" class="skills">
                      <p class="skills-name"><strong> MySQL</strong></p>
                    </li>
                    <li class="skills-container">
                      <img src="{{ asset('skills/cassandra.png') }}" class="skills">
                      <p class="skills-name"><strong> Cassandra</strong></p>
                    </li>
                  </ul>

              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">

    </div>
    <!-- Default to the left -->
    <strong>Desarrollado por <a href="{{url('/')}}">Andry León</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
