<!DOCTYPE html>
<style>
    body {
        background-color: #F0F0F0;
    }
    nav {
        color: white;
    }
    .footer{
        margin-top: 50px;
        bottom: 0;
    }
    footer {
        position: fixed;
        top: 95%;
        width: 100%;
        height: 50px;
    }
    .credenciales{
        margin-left: 40%;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/526f5e2cea.js" crossorigin="anonymous"></script>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('tittle') @endsection</title>
</head>
<head>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a href="/" class="nav-link" style="color:black">Inicio <i class="fa-sharp fa-solid fa-house-user" style="color: black;"></i></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/tareas?page=1">Ver lista <i class="fa-sharp fa-solid fa-list"></i></a>
                    <a class="nav-link" href="/tareas/pendientes">Tareas Pendientes <i class="fa-sharp fa-solid fa-bell"></i></a>
                    

                </div>
                <div class="credenciales">
                <span>Hola USUARIO, TIPO.USUARIO <span style="color: blue">Ultimo inicio: LAST.LOGIN.USUARIO </span></span>
                <a href="/logout"> <button class="btn btn-primary">Logout <i class="fa-sharp fa-solid fa-right-from-bracket"></i></button></a>
                </div>
            </div>
        </div>
    </nav>
    @section('head') @endsection
</head>
<body>
    <br>

<!-- CONTENIDO -->
    <div id="content">    @section('content') @endsection </div>

<!-- FOOTER -->
    <div class="footer" >
    @section('footer')
        <footer class="text-center text-white static-bottom" >
            <div class="text-center p-3" style="background-color: rgba(51, 51, 51, 1);">
                <span style="color: white">© 2022 Copyright by</span>
                <a class="text-white" href="https://github.com/KikePereira/PHPv2.0">Enrique Pereira Ramos</a>
            </div>
        </footer>
    @endsection
    </div>
</body>
</html>
