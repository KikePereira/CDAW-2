<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleado';
    use HasFactory;

    public function Tarea()
    {
        return $this->hasMany(Tarea::class);
    }
}
