<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    protected $table='tarea';
    use HasFactory;

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
