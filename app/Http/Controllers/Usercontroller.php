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
        $rules = ['correo'=>'required|unique:Usuarios','nombre' =>'required','pass'=>'required|min:6'];
        $messages = ['nombre.required' => 'El campo nombre es obligatorio',
                    'correo.required' => 'El campo correo es obligatorio',
                    'correo.unique' => 'Este correo ya esta registrado',
                    'pass.required' => 'El campo password es obligatorio',
                    'pass.min' => 'La contraseña debe ser minimo 6 caracteres'];                    
        $this->validate(request(), $rules, $messages); 
        $data =  request()->all();
        /*$usuario = Usuarios::where('correo', '=', $data['correo'])->get();
        if (count($usuario))
        {
            return redirect('usuarios/nuevo')->withErrors(['correo'=>'Este correo ya fue registrado']);
        }*/
        $Usuario = new Usuarios;
        $Usuario->nombre = request()->nombre;
        $Usuario->correo = request()->correo;
        $Usuario->profesion_id = request()->profesion;
        $Usuario->password = bcrypt(request()->pass);
        $Usuario->save();
        return redirect('usuarios/lista');
    }

}
