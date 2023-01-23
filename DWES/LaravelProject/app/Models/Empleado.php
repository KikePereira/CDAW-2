<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table='empleado';
    use HasFactory;

    public function tarea()
    {
        return $this->hasMany(tarea::class);
    }
}
