<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//auth
Route::post('login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('register', [App\Http\Controllers\LoginController::class, 'register']);
//permisos
Route::post('postPermiso', [App\Http\Controllers\PermisosController::class, 'postPermiso']);
Route::get('getPermisos', [App\Http\Controllers\PermisosController::class, 'getPermisos']);
Route::post('postModalidad', [App\Http\Controllers\ModalidadPermisoController::class, 'postModalidadesPermiso']);
Route::get('getModalidades', [App\Http\Controllers\ModalidadPermisoController::class, 'getModalidadesPermiso']);
Route::post('postTest', [App\Http\Controllers\testController::class, 'postTest']);
Route::get('getTests', [App\Http\Controllers\testController::class, 'getTest']);
Route::post('postTest', [App\Http\Controllers\testController::class, 'postTest']);
Route::get('getTests', [App\Http\Controllers\testController::class, 'getTest']);
