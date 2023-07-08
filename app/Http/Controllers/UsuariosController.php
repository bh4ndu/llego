<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class UsuariosController extends Controller
{
    function listado() {
        $registros = Usuarios::all();
        return json_encode($registros);
    }

    function registrar(Request $request) {
        $datos = $request->all();
        $datos ['contrasena'] = sha1($datos['contrasena']); 
        Usuarios::create($datos);
        return 1;
    }

    function actualizar($id,Request $request) {
        $datos = $request->all();
        $usuario = usuarios::find($id);
        $usuario->update($datos);
        echo 'se actualizo el usuario correctamente';
        return 1;
    }

    function eliminar($id) {
        $usuario = usuarios::find($id);
        $usuario->delete();
        echo 'se ha eliminado al usuario';
        return 1;
    }

    function login(request $request) {
        $datos = $request->all();
        $usuario = usuarios::where('correo', $datos['correo'])
                            ->where('contrasena', sha1($datos['contrasena']))
                            ->first();
        if ($usuario) {
            return json_encode($usuario);
        } else {
            return 0;
        }
    }
}
