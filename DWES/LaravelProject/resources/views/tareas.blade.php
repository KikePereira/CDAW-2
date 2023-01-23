@extends('plantilla')


  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/tareas.css')}}">

@section('titulo')
Tareas
@endsection

@section('contenido')
    <br>
<div class="list">
    <table class="table">
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
                <td>{{$tarea->cliente->Nombre}}</td>
                <td>{{$tarea->Telefono}}</td>
                <td>{{$tarea->Provincia}}</td>
                <td>{{$tareas['id']}}</td>
                <td>{{$tareas['id']}}</td>
                <td>{{$tareas['id']}}</td>
            </tr>
            @endforeach
        </table>
        
</div>
@endsection