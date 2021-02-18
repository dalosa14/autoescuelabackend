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
    //funcion de logueo, se envia el campò email y password y verifica si son validos conjuntamente,
    //si no lo son devuelve un campo error con 'Credenciales no válidas' 
    //si si lo son devuelve el token que será necesario para la autentificación.
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
    //funcion de registro comprueba que el payload email es un email, si ya existe notificado de ambas si es el caso, 
    //y devolviendo el nuevo usuario si todo va bien, si ocurre cualquier otro error se devolvera en la respuesta.
    public function register(Request $request)
    {
        try {
            $result = filter_var( $request->email, FILTER_VALIDATE_EMAIL );
            if (!$result) {
                return response()->json(['Success'=>'false',
                'msg'=>'el correo no es valido',
                'errorCode'=>1
            ], 200);
            }
                
            
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
