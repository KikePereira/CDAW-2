<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(TareasController::class)->group(function(){
    Route::get('tareas','index');
    Route::get('tareas/create','create');
    Route::get('tareas/{id}','show');
    
});

Route::resource('addTareas', TareasController::class);


