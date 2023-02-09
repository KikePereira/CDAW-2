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
                    <div class="row">
                        <div class="col-3">
                        <a href="/tareas/{{$tarea->id}}"><button class="btn btn-primary">Ver</button></a>
                        </div>
                        <div class="col-9">
                        <form action="{{ url('/addTareas/'.$tarea->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('¿Seguro?')">
                    </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="">        {{$tareas->links()}}
</div>
</div>
@endsection