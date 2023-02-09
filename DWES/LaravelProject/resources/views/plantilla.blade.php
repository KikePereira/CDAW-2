<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/plantilla.css')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>@yield('titulo')</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <a href="/"><img src="https://github.com/KikePereira/CDAW-2/blob/main/DWES/LaravelProject/resources/views/logo.png?raw=true" alt="" class="img"></a>
            </div>
            <div class="menu">
                <!-- TAREAS -->
                <div class="dropdown dropend">
                    <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="fs-4">Tareas</span>
                    </button>                 

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/tareas">Ver</a></li>
                        <li><a class="dropdown-item" href="/tareas/create">Añadir</a></li>
                    </ul>
                </div>
                <!-- USUARIOS -->
                <div class="">
                <button class="btn btn-primary"><span class="fs-4">Usuarios</span></button>
                </div>
            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">
        <!-- NAVBAR -->
        <div id="navbar-container">
        <nav class="navbar  navbar-light bg-primary border-bottom">
            <div class="container">
            <div class="logo row" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="col-6">
                    <img src="https://github.com/KikePereira/CDAW-2/blob/main/DWES/LaravelProject/resources/views/logo.png?raw=true" alt="" class="img-navbar">
                </div>
            </div>
            <div class="col-3">
                            <h1 class="font-weight-bold mb-0 text-white">Bienvenido @yield('usuario')</h1>
                            <p class="lead text-muted">Ultima conexion: @yield('conexion')</p>
                          </div>
            <div class="col-3">
            
            <button class="btn btn-light w-100 align-self-center">Logout</button>
            </div>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
             
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                  <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                    Lista</a>

                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
                    Usuarios</a>

                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i>
                    Perfil</a>
                <a href="#" class="d-block text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
                    Configuración</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </div>
        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-light py-3" id="content-header">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Bienvenido @yield('usuario')</h1>
                            <p class="lead text-muted">Ultima conexion: @yield('conexion')</p>
                          </div>
                          <div class="col-lg-3 col-md-4 d-flex">
                            <button class="btn btn-primary w-100 align-self-center">Logout</button>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="py-3">
                @yield('contenido')
              </section>

        </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
       
</body>

</html>