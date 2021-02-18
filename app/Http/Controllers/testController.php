<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
//se añade un nuevo test ,si todo va bien se envia una coonfirmación, si no se puede, devuelve el error 
class testController extends Controller
{
    public function postTest(Request $request)
{
    try {
        $test = new Test();
        $test->name = $request->name;
        
        
        $test->save();
        return response()->json(['Success'=>'true',
                'msg'=>'test agragado correctamente',
                'errorCode'=>0
            ], 200);

    } catch (\Throwable $th) {
        return response()->json($th, 201);
    }
   

}
//devuelve todos los tests disponibles si no se puede devuelve un error 
    public function getTest(Request $request)
{
    try {
        $tests = Test::all();
        return response()->json($tests, 200);

    } catch (\Throwable $th) {
        return response()->json($th, 201);
    }
   
}
}