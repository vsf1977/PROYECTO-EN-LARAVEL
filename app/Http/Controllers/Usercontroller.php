<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Usuarios;
use \App\Profesiones;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    public function __invoke()
    {
        return view('usuarios/menu');
    }
    public function lista()
    {
        $usuarios = Usuarios::all();
        $titulo = 'Listado de Usuarios';
        return view('usuarios/lista',compact('usuarios','titulo'));
    }

    public function detalles($id)
    {
        $usuario = Usuarios::where('id', '=', $id)->get();
        $profesion = Profesiones::where('id', '=', $id)->get();
        if (!count($usuario))
        {
            return response()->view('error404',[],404);
        }
        else
        {
            return view('usuarios/detalles',compact('usuario','profesion'));
        }
    }

    public function nuevo()
    {
        $profesiones = Profesiones::all();
        return view('usuarios/new',compact('profesiones'));
    }

    public function guardar()
    {
        return ('se guarda el usuario');
    }

}
