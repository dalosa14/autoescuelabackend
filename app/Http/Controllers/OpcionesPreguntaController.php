<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opciones;

class OpcionesPreguntaController extends Controller
{
    //se añade una opcion a una pregunta , si todo va bien , devuelve confiramación si ha ido bien y sinó el error.
    public function postOpcion(Request $request)
{
    try {
        $opcion = new Opciones();
        $opcion->texto = $request->texto;
        $opcion->correcto = $request->correcto;
        $opcion->pregunta_id = $request->pregunta_id;
        $opcion->save();
        return response()->json(['Success'=>'true',
                'msg'=>'opcion agragada correctamente',
                'errorCode'=>0
            ], 200);

    } catch (\Throwable $th) {
        return response()->json($th, 201);
    }
   

}
//devuelve las opciones de una pregunta en concreto pasado por parametro, si la encuentra la dduevuelve, sinó, devuelve el error.
public function getOpciones($pregunta_id)
{
    try {
        $permisos = Opciones::where('pregunta_id','=',$pregunta_id)->get();
        return response()->json($permisos, 200);

    } catch (\Throwable $th) {
        return response()->json($th, 201);
    }
   

}
}
