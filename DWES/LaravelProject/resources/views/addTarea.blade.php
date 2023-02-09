@extends('plantilla')

@section('titulo')
 Añadir Tareas
@endsection

@section('contenido')
<div class="container">
    <form action="{{ route('addTareas.store')}}" method="post" class="">
        <!-- PERSONAL -->
        <h4 class="fw-bold">Contacto</h4>
        <div class="row">
            
            <!-- NOMBRE -->
            <div class="col-12 col-lg-4">
                <label for=""  class="form-label">Nombre:</label> @error('Nombre')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="Nombre" placeholder="Nombre persona de contacto">
            </div>
            <!-- APELLIDO -->
            <div class="col-12 col-lg-4">
                <label for=""  class="form-label">Apellidos:</label> @error('Apellidos')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="Apellidos" placeholder="Apellido persona de contacto">
            </div>
        </div>
        <br>
        <!-- CONTACTO -->
        <div class="row">
            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">Telefono:</label> @error('Telefono')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="Telefono" placeholder="Telefono persona de contacto">
            </div>
            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">E-mail:</label> @error('Correo')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="Correo" placeholder="Correo Electronico persona de contacto">
            </div>
        </div>
        <br>
        <!-- DESCRIPCION -->
        <h4 class="fw-bold">Descripcion</h4>
        <div class="row">
            <div class="col-12">
                <label for="" class="form-label"> Descripcion:</label> @error('Descripcion')<span class="text-danger">{{$message}}</span>@enderror
                <textarea class="form-control" placeholder="Escribe aqui las anotaciones que creas necesarias para guiar y ayudar a los operarios." name="Descripcion"></textarea>
            </div>
        </div>
        <br>
        <!-- DIRECCION -->
        <h4 class="fw-bold">Direccion</h4>
        <div class="row">
            <div class="col-12 col-lg-7">
                <label for=""  class="form-label">Direccion:</label> @error('Direccion')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="Direccion" placeholder="Direccion">
            </div>
            <div class="col-12 col-lg-5">
                <label for=""  class="form-label">Codigo Postal:</label> @error('Codigo_postal')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="Codigo_postal" placeholder="Codigo Postal">
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">Poblacion:</label> @error('Poblacion')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="Poblacion" placeholder="Poblacion">
            </div>

            <div class="col-12 col-lg-6">
                <label for=""  class="form-label">Provincia:</label> @error('Provincia')<span class="text-danger">{{$message}}</span>@enderror
                <input type="text" class="form-control" name="Provincia" placeholder="Provincia">
            </div>
        </div>
        <br>
            <!-- EMPLEADO Y CLIENTE-->
            <div class="row">
            <!-- EMPLEADO -->
            <div class="col-6">
            <h4 class="fw-bold">Empleado</h4>
                <label for="" class="form-label">Empleado:</label>  @error('empleado')<span class="text-danger">{{$message}}</span>@enderror
                <select class="form-select" name="empleado">
                    <option value="" disabled selected>Selecciona un empleado</option>
                    @foreach($empleados as $empleado)
                    <option value="{{$empleado->id}}">{{$empleado->Nombre}}</option>
                    @endforeach
                </select>            
            </div>
            <!-- CLIENTE -->
            <div class="col-6">
                <h4 class="fw-bold">Cliente</h4>
                <label for="" class="form-label">Cliente:</label> @error('cliente')<span class="text-danger">{{$message}}</span>@enderror
                <select name="cliente" id="" class="form-select">
                    <option value="" disabled selected>Selecciona un cliente</option>
                    @foreach($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->Nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- FECHAS -->
        <br>
        <h4 class="fw-bold">Fecha</h4>
        <div class="row">
            <div class="col-12 col-lg-6">
                <label for="" class="form-label">Fecha Realizacion:</label> @error('Fecha_creacion')<span class="text-danger">{{$message}}</span>@enderror
                <input type="date" class="form-control" name="Fecha_creacion">
            </div>
        </div>
        <br>
        <!-- ANOTACIONES -->
        <h4 class="fw-bold">Anotaciones</h4>
        <div class="row">
            <div class="col-12">
                <label for="" class="form-label"> Anotaciones:</label> @error('anotaciones')<span class="text-danger">{{$message}}</span>@enderror
                <textarea class="form-control" placeholder="Escribe aqui las anotaciones que creas necesarias para guiar y ayudar a los operarios." name="Anotacion_inicio"></textarea>
            </div>
        </div>
        <br>
    
        <br>
        <input type="submit" class="form-control bg-primary text-white">
    </form>
</div>
@endsection