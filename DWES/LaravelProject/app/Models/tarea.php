<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    protected $table='tarea';
    use HasFactory;


    public function empleado()
    {
        return $this->belongsTo(empleado::class);
    }

    public function cliente()
    {
        return $this->belongsTo(cliente::class);
    }

    public $timestamps =false;
}
