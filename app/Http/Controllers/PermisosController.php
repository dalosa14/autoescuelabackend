<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permiso;
class PermisosController extends Controller
{
    public function postPermiso(Request $request)
{
    try {
        $permiso = new Permiso();
        $permiso->img = $request->img;
        $permiso->name = $request->name;
        $permiso->active = 1;
        $permiso->description = $request->description;
        $permiso->save();
        return response()->json(['Success'=>'true',
                'msg'=>'permiso agragado correctamente',
                'errorCode'=>0
            ], 200);

    } catch (\Throwable $th) {
        return response()->json($th, 201);
    }
   

}
    public function getPermisos(Request $request)
{
    try {
        $permisos = Permiso::all();
        return response()->json($permisos, 200);

    } catch (\Throwable $th) {
        return response()->json($th, 201);
    }
   

}
}
