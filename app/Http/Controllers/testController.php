<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Pregunta;

class testController extends Controller
{
    public function postTest(Request $request)
{
    try {
        $pregunta = Pregunta::all()->first();
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