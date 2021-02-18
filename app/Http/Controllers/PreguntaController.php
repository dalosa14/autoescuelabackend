<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use App\Models\Opciones;

class PreguntaController extends Controller
{
    //guarda una pregunta asociada a un test deevuelve una confirmación de la acción o un error 
    public function postPregunta(Request $request)
    {
        try {
            $pregunta = new Pregunta();
            $pregunta->name = $request->name;
            $pregunta->question = $request->name;
            $pregunta->img = $request->name;
            $pregunta->test_id = $request->name;
            $pregunta->save();
            return response()->json(['Success'=>'true',
                    'msg'=>'pregunta agragada correctamente',
                    'errorCode'=>0
                ], 200);
    
        } catch (\Throwable $th) {
            return response()->json($th, 201);
        }
       
    
    }
    //devuelve las preguntas del test pasado por parametro con sus opciones
    public function getPreguntasTest($test_id)
{
    try {
        
        $preguntas = Pregunta::with('opciones')->where('test_id','=',$test_id)->get();
        
        return response()->json($preguntas, 200);

    } catch (\Throwable $th) {
        return response()->json($th, 201);
    }
   
}
}
