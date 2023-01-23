<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table='cliente';
    use HasFactory;

    public function tarea()
    {
        return $this->hasMany(tarea::class);
    }
}
