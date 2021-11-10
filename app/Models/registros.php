<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registros extends Model
{
    use HasFactory;

    protected $table = "registros";

    public $timestamps = false;

    protected $fillable = ['nombre','apellido','cedula','telefono','direccion','email','password','state'];
}
