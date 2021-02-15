<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModalidadPermiso;

class ModalidadPermisoController extends Controller
{
    public function postModalidadesPermiso(Request $request)
    {
        try {
            $modalidad = new ModalidadPermiso();
            $modalidad->img = $request->img;
            $modalidad->name =$request->name;
            $modalidad->code =$request->code;
            $modalidad->description =$request->description;
            $modalidad->active =1;
            // $modalidad->permiso()->attach(1);

            $modalidad->save();
            return response()->json(['Success'=>'true',
                    'msg'=>'Modalidad agragada correctamente',
                    'errorCode'=>0
                ], 200);
    
        } catch (\Throwable $th) {
            return response()->json($th, 201);
        }
       
    
    }
        public function getModalidadesPermiso(Request $request)
    {
        try {
            $modalidades = ModalidadPermiso::all();
            return response()->json($modalidades, 200);
    
        } catch (\Throwable $th) {
            return response()->json($th, 201);
        }
       
    
    }
}
