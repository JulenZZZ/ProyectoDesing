<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registro1_Controller extends Controller
{
    public function insertarDatos(){
        $nombre=request()->get('Nombre');
        $apellido=request()->get('Apellido');

        $dato = new dato();
        $dato -> nombre= $nombre;
        $dato -> apellido = $apellido;
        $dato -> save();
        return(view('/form'));
    }
}
