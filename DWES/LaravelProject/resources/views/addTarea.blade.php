@extends('plantilla')

@section('titulo')
 Añadir Tareas
@endsection

@section('contenido')
<div class="container">
    <form action="{{ route('addTareas.store') }}" method="post" class="">
        <!-- PERSONAL -->
        <h4 class="fw-bold">Personal</h4>    
        <div class="row">
            
            <!-- NOMBRE -->
            <div class="col-12 col-lg-4">
                <label for=""  class="form-label">Nombre:</label> @error('nombre')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="nombre">
            </div>
            <!-- APELLIDO -->
            <div class="col-12 col-lg-4">
                <label for=""  class="form-label">Apellido:</label> @error('apellido')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="apellido">
            </div>
            <!-- DNI -->
            <div class="col-12 col-lg-4">
                <label for=""  class="form-label">DNI:</label> @error('dni')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="dni">
            </div>
        </div>
        <br>
        <h4 class="fw-bold">Contacto</h4>
        <!-- CONTACTO -->
        <div class="row">
            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">Telefono:</label> @error('telefono')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="telefono">
            </div>
            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">E-mail:</label> @error('mail')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="mail">
            </div>
        </div>
        <br>
        <h4 class="fw-bold">Direccion</h4>
        <!-- DIRECCION -->
        <div class="row">
            <div class="col-12 col-lg-8">
                <label for=""  class="form-label">Direccion:</label> @error('direccion')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="col-12 col-lg-4">
                <label for=""  class="form-label">Codigo Postal:</label> @error('codigo_postal')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="codigo_postal">
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">Poblacion:</label> @error('poblacion')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="poblacion">
            </div>

            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">Provincia:</label> @error('provincia')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="provincia">
            </div>
        </div>
        <!-- FECHAS -->
        <br>
        <h4 class="fw-bold">Fecha</h4>
        <div class="row">
            <div class="col-12 col-lg-6">
                <label for="" class="form-label">Fecha Realizacion:</label> @error('fecha_realizacion')<span class="text-danger">{{$message}}</span>@enderror
                <input type="date" class="form-control" name="fecha_realizacion">
            </div>
        </div>
        <br>
        <!-- ANOTACIONES -->
        <h4 class="fw-bold">Anotaciones</h4>
        <div class="row">
            <div class="col-12">
                <label for="" class="form-label"> Anotaciones:</label> @error('anotaciones')<span class="text-danger">{{$message}}</span>@enderror
                <textarea class="form-control" placeholder="Escribe aqui las anotaciones que creas necesarias para guiar y ayudar a los operarios." name="anotaciones"></textarea>
            </div>
        </div>
        <br>
        <input type="submit" class="form-control bg-primary text-white">
    </form>
</div>
@endsection