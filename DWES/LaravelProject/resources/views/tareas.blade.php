@extends('plantilla')


  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/tareas.css')}}">

@section('titulo')
Tareas
@endsection

@section('contenido')
    <br>
<div class="container-fluid">
    <table class="table bg-light">
            <tr class="titles bg-dark text-white">
                <th>ID</th>
                <th>Estado</th>
                <th>Operario</th>
                <th>Cliente</th>
                <th>Telefono</th>
                <th>Provincia</th>
                <th>Fecha de finalizacion</th>
                <th>Anotaciones iniciales</th>
                <th></th>
            </tr>
            @foreach($tareas as $tarea)
            <tr>
                <td>{{$tarea->id}}</td>
                <td>{{$tarea->Estado}}</td>
                <td>{{$tarea->empleado->Nombre}}</td>
                <td>{{$tarea->cliente->Nombre}} {{$tarea->cliente->Apellidos}}</td>
                <td>{{$tarea->Telefono}}</td>
                <td>{{$tarea->Provincia}}</td>
                <td>{{$tarea->Fecha_finalizacion}}</td>
                <td>{{$tarea->Anotacion_inicio}}</td>
                <td>
                    <button class="btn btn-info">VER</button>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="">        {{$tareas->links()}}
</div>
</div>
@endsection