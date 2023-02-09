@extends('plantilla')

@section('titulo')
Tareas SHOW
@endsection

@section('contenido')
@foreach($tareas as $tarea)
<div class="container">
<div class="row">

    <div class="col-9">
        <form action="{{ url('/addTareas/'.$tarea->id)}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input class="btn btn-danger float-end" type="submit" value="Borrar" onclick="return confirm('¿Seguro?')">
        </form>
    </div>
    
    <form action="" method="post" class="">
        <!-- PERSONAL -->
        <h4 class="fw-bold">Contacto</h4>
        <div class="row">
            
            <!-- NOMBRE -->
            <div class="col-12 col-lg-4">
                <label for=""  class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="Nombre" placeholder="Nombre persona de contacto" value="{{$tarea->Nombre}}" disabled>
            </div>
            <!-- APELLIDO -->
            <div class="col-12 col-lg-4">
                <label for=""  class="form-label">Apellido:</label>
                <input type="text" class="form-control" name="Apellido" placeholder="Apellido persona de contacto" value="{{$tarea->Apellidos}}" disabled>
            </div>
        </div>
        <br>
        <!-- CONTACTO -->
        <div class="row">
            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">Telefono:</label>
                <input type="text" class="form-control" name="Telefono" placeholder="Telefono persona de contacto" value="{{$tarea->Telefono}}" disabled>
            </div>
            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">E-mail:</label>
                <input type="text" class="form-control" name="Correo" placeholder="Correo Electronico persona de contacto" value="{{$tarea->Correo}}" disabled>
            </div>
        </div>
        <br>
        <!-- DESCRIPCION -->
        <h4 class="fw-bold">Descripcion</h4>
        <div class="row">
            <div class="col-12">
                <label for="" class="form-label"> Descripcion:</label>
                <textarea class="form-control" placeholder="Escribe aqui las anotaciones que creas necesarias para guiar y ayudar a los operarios." name="Descripcion" disabled>{{$tarea->Descripcion}}</textarea>
            </div>
        </div>
        <br>
        <!-- DIRECCION -->
        <h4 class="fw-bold">Direccion</h4>
        <div class="row">
            <div class="col-12 col-lg-7">
                <label for=""  class="form-label">Direccion:</label>
                <input type="text" class="form-control" name="Direccion" placeholder="Direccion" value="{{$tarea->Direccion}}" disabled>
            </div>
            <div class="col-12 col-lg-5">
                <label for=""  class="form-label">Codigo Postal:</label>
                <input type="text" class="form-control" name="Codigo_postal" placeholder="Codigo Postal" value="{{$tarea->Codigo_postal}}" disabled>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">Poblacion:</label>
                <input type="text" class="form-control" name="Poblacion" placeholder="Poblacion" value="{{$tarea->Poblacion}}" disabled>
            </div>

            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">Provincia:</label>
                <input type="text" class="form-control" name="Provincia" placeholder="Provincia" value="{{$tarea->Provincia}}" disabled>
            </div>
        </div>
        <br>
            <!-- EMPLEADO Y CLIENTE-->
            <div class="row">
            <!-- EMPLEADO -->
            <div class="col-6">
            <h4 class="fw-bold">Empleado</h4>
                <label for="" class="form-label">Empleado:</label> 
                <input type="text" class="form-control" name="Empleado" placeholder="Empleado asignado" value="{{$tarea->empleado->Nombre}}" disabled>
            </div>
            <!-- CLIENTE -->
            <div class="col-6">
                <h4 class="fw-bold">Cliente</h4>
                <label for="" class="form-label">Cliente:</label>
                <input type="text" class="form-control" name="Cliente" placeholder="Cliente asignado" value="{{$tarea->cliente->Nombre}}" disabled>

            </div>
        </div>
        <!-- FECHAS -->
        <br>
        <h4 class="fw-bold">Fecha</h4>
        <div class="row">
            <div class="col-12 col-lg-6">
                <label for="" class="form-label">Fecha Realizacion:</label>
                <input type="text" class="form-control" name="Fecha_creacion" placeholder="Fecha_creacion" value="{{$tarea->Fecha_creacion}}" disabled>
            </div>
        </div>
        <br>
        <!-- ANOTACIONES -->
        <h4 class="fw-bold">Anotaciones</h4>
        <div class="row">
            <div class="col-12">
                <label for="" class="form-label"> Anotaciones:</label>
                <textarea class="form-control" placeholder="Escribe aqui las anotaciones que creas necesarias para guiar y ayudar a los operarios." name="Anotacion_inicio" disabled>{{$tarea->Anotacion_inicio}}</textarea>
            </div>
        </div>
        <br>
    </form>
</div>
@endforeach

@endsection