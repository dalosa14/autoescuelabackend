<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use GrahamCampbell\ResultType\Success;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $usuario = User::where('email', $request->email)->first();
        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        } else {
            
            // return response()->json(['token' => $usuario->api_token]);
            return response()->json(['token' => $usuario->createToken($usuario->email)->plainTextToken]);
        }
    }
    public function register(Request $request)
    {
        try {
            $usuario = User::where('email', $request->email)->exists();
            if ($usuario) {
                return response()->json(['Success'=>'false',
                'msg'=>'el usuario ya existe',
                'errorCode'=>1
            ], 200);

            }

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json($user, 200);
        } catch (\Throwable $th) {
            return response()->json($th, 201);
        }
    }
}
