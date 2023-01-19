<!DOCTYPE html>
<style>
  body{
    width:100%;
    margin:0;
    min-height: 100vh;
    display:flex;
    flex-direction:column;
  }
footer{
  margin-top:auto;
  width:100%;
  display:table;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/526f5e2cea.js" crossorigin="anonymous"></script>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
</head>
<head>
    
    @yield('head')
</head>
<body>
  <div class="container-fluid">
    <!-- CABECERA -->
    <div class="row">
      <div class="col-12">
      <nav class="navbar navbar-expand bg-warning">
            <a href="/" class="nav-link" style="color:black">Inicio <i class="fa-sharp fa-solid fa-house-user" style="color: black;"></i></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="">Ver lista <i class="fa-sharp fa-solid fa-list"></i></a> 
                    <a class="nav-link" href="">Tareas Pendientes <i class="fa-sharp fa-solid fa-bell"></i></a>
                <div class="credenciales">
                <a href=""> <button class="btn btn-primary logout">Logout <i class="fa-sharp fa-solid fa-right-from-bracket"></i></button></a>
                </div>
            </div>
        </div>
    </nav>
      </div>
    

    </div>

 
<!-- CONTENIDO -->
    <div id="content bg-gray">  
      @yield('content') 
    </div>

<!-- FOOTER -->
    <div class="footer" >
        <footer class="footer mt-auto py-3 text-center text-white bg-dark" >
            <div class="">
                <span style="color: white">© 2022 Copyright by</span>
                <a class="text-white" href="https://github.com/KikePereira/PHPv2.0">Enrique Pereira Ramos</a>
            </div>
        </footer>
    </div>
    </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
