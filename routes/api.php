<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\UsuariosController;

use App\Models\eventos;
use App\Models\usuarios;


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



route::post('/eventos/registrar', [EventosController::class, 'registrar']);
route::get('/eventos/listar', [EventosController::class, 'listado']);
route::get('/eventos/detalle/{id}', [EventosController::class, 'detalle']);
route::put('/eventos/actualizar/{id}', [EventosController::class, 'actualizar']);
route::get('/eventos/eliminar/{id}', [EventosController::class, 'eliminar']);


route::post('/usuarios/registrar', [UsuariosController::class, 'registrar']);
route::get('/usuarios/listar', [UsuariosController::class, 'listado']);
route::put('/usuarios/actualizar/{id}', [UsuariosController::class, 'actualizar']);
route::get('/usuarios/eliminar/{id}', [UsuariosController::class, 'eliminar']);



route::post('/usuarios/login', [UsuariosController::class, 'login']);






