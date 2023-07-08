<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;

class EventosController extends Controller
{
    function listado() {
        $registros = Eventos::all();
        return json_encode($registros);
    }

    function detalle($id) {
        $evento = Eventos::find($id);
        return json_encode($evento);
    }

    function registrar(Request $request) {
        $datos = $request->all();
        Eventos::create($datos);
        echo 'se registro el evento correctamente';
    }

    function actualizar($id,Request $request) {
        $datos = $request->all();
        $evento = Eventos::find($id);
        $evento->update($datos);
        echo 'se actualizo el evento correctamente';
    }

    function eliminar($id) {
        $evento = Eventos::find($id);
        $evento->delete();
        echo 'se ha eliminado el evento';
    }
    
}
