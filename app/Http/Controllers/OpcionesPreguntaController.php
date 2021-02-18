<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opciones;

class OpcionesPreguntaController extends Controller
{
    public function postOpcion(Request $request)
{
    try {
        // $opciones = Opciones::where('pregunta_id','=','$request->pregunta_id')->get();
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
