<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarea;
use App\Models\empleado;
use App\Models\cliente;


class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas=tarea::all();
        $tareas = tarea::Simplepaginate(5);
        return view('tareas',['tareas'=>$tareas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empleados=empleado::all();
        $clientes=cliente::all();
        return view('addTarea',['empleados'=>$empleados, 'clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $tarea= new tarea;

       $validated = $request->validate([
        'Nombre' => ['required','regex:/^[a-z]+$/i'],
        'Apellido' => ['required','regex:/^[a-z]+$/i'],
        'Telefono' => ['required','regex:/(\+34|0034|34)?[ -]*(6|7)[ -]*([0-9][ -]*){8}/    '],
        'Correo' => ['required','email'],
        'Descripcion' => 'required',
        'Direccion' => 'required',
        'Codigo_postal' => ['required','regex:/^([0-9]{5})$/'],
        'Poblacion' => ['required','regex:/^[a-z]+$/i'],
        'Provincia' => ['required','regex:/^[a-z]+$/i'],
        'empleado' => 'required',
        'cliente' => 'required',
        'Fecha_creacion' => 'required',
        'Anotacion_inicio' => 'nullable',
       ]
       );

        $tarea->Estado='Pendiente';
       $tarea->id=NULL;

       $tarea->Nombre=$request->input('Nombre');
       $tarea->Apellidos=$request->input('Apellidos');
       $tarea->Telefono=$request->input('Telefono');
       $tarea->Correo=$request->input('Correo');

       $tarea->Descripcion=$request->input('Descripcion');
       $tarea->Direccion=$request->input('Direccion');
       $tarea->Codigo_postal=$request->input('Codigo_postal');
       $tarea->Poblacion=$request->input('Poblacion');

       $tarea->Provincia=$request->input('Provincia');
       $tarea->empleado_id=$request->input('empleado');
       $tarea->cliente_id=$request->input('cliente');

       $tarea->Fecha_creacion=$request->input('Fecha_creacion');
       $tarea->Anotacion_inicio=$request->input('Anotacion_inicio');

       $tarea->save();

       return redirect()->route('addTareas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tareas=tarea::where('id',$id)->get();
        return view('showTarea',['tareas'=>$tareas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tarea::destroy($id);
        return redirect()->route('addTareas.index');


    }
}
