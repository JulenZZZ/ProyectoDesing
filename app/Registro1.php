<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro1 extends Model
{
    protected $table='usuario';
    protected $fillable=['nombre','apellido'];
}
